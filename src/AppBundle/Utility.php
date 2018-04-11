<?php
/**
 * Created by PhpStorm.
 * User: xenon
 * Date: 6/14/17
 * Time: 4:27 PM
 */

namespace AppBundle;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class Utility
{
    /**
     * @param $object
     * @return mixed
     * usage : return new JsonResponse(array('aKey' => Utility::objectToArray($yourObject)));
     */
    public static function objectToArray($object){
        $normalizer = new ObjectNormalizer();
        $normalizer
            ->setCircularReferenceHandler(function($object){
            return $object->getId();
        });
        $serializer = new Serializer([$normalizer], [new JsonEncoder()]);
        $object_array = json_decode($serializer->serialize($object,'json'),true);

        return $object_array;
    }

}
