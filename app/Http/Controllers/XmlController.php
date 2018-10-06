<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPExcel_IOFactory;

class XmlController extends Controller
{
    public function index(){
        $file_name = $_SERVER['DOCUMENT_ROOT'] . '/files/alser.xlsx';
        $objPHPExcel = PHPExcel_IOFactory::load($file_name);
        $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

        $current_date = date("Y-m-d H:i:s");

        $xml = "<?xml version='1.0' encoding='UTF-8'?><yml_catalog date='$current_date'>";
        $xml .= '
        <shop>
            <name>Likemoney.me</name>
            <company>Likemoney LLC</company>
            <url>likemoney.me</url>
            <currencies>
                <currency id="USD" rate="1"/>
            </currencies>
            <categories>
                <category id="1" parentId="0">1-прайс</category>
                <category id="2" parentId="0">2-прайс</category>
                <category id="3" parentId="0">3-прайс</category>
                <category id="4" parentId="0">4-прайс</category>
                <category id="5" parentId="0">5-прайс</category>
                <category id="6" parentId="0">6-прайс</category>
            </categories>
            <offers>
        ';

        for($i = 2; $i<count($sheetData); $i++) {
            $title = $sheetData[$i]['C'];
            $title=preg_replace('/&/i', ' ', $title);
            //$price = (int)$sheetData[$i]['J'];
            $article_code = $sheetData[$i]['A'];
            //$cat_id = (int)$sheetData[$i]['I'];
            $vendor = $sheetData[$i]['B'];
            //$cat = $sheetData[$i]['G'];

            $xml .= "<offer id='$i'  type='vendor.model' available='true'>";
            //$xml .= "<price>$price</price>";
            //$xml .= "<currencyId>USD</currencyId>";
            if($i < 500){
                $xml .= "<categoryId>1</categoryId>";
            }
            if($i >= 500){
                $xml .= "<categoryId>2</categoryId>";
            }
            if($i >= 1000){
                $xml .= "<categoryId>3</categoryId>";
            }
            if($i >= 1500){
                $xml .= "<categoryId>4</categoryId>";
            }
            if($i >= 2000){
                $xml .= "<categoryId>5</categoryId>";
            }
            if($i >= 2500){
                $xml .= "<categoryId>6</categoryId>";
            }

            $xml .= "<vendor>$vendor</vendor>";
            $xml .= "<vendorCode>$article_code</vendorCode>";
            $xml .= "<model>$title</model>";
            $xml .= "</offer>";
        }
        $xml .= '</offers>
                </shop>
                </yml_catalog>';
        $path = $_SERVER['DOCUMENT_ROOT'] . '/files/';
        $xml_file = md5(time()) . '.xml';
        $destination = $path.$xml_file;
        $my_file = fopen($destination, "w") or die("Unable to open file!");
        fwrite($my_file, $xml);
        fclose($my_file);
        header("Location: /files/".$xml_file);
        exit();
    }
}