<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class XML_Serialisierung implements Serialisierungsserver
{
    public function serialize($data) {
        $xml_data = new \SimpleXMLElement('<?xml version="1.0"?><data></data>');
        $this->array_to_xml($data, $xml_data);
        $result = $xml_data->asXML('./foobar.xml');
    }

    public function deserialize() {

    }

    private function array_to_xml( $data, &$xml_data ) {
        foreach($data as $key => $value ) {
            if( is_numeric($key) ){
                $key = 'item'.$key; //dealing with <0/>..<n/> issues
            }
            if( is_array($value) ) {
                $subnode = $xml_data->addChild($key);
                array_to_xml($value, $subnode);
            } else {
                $xml_data->addChild("$key",htmlspecialchars("$value"));
            }
         }
     }
}
