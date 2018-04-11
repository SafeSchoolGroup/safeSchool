<?php
/**
 * Created by PhpStorm.
 * User: xenon
 * Date: 6/12/17
 * Time: 3:02 PM
 */

namespace AppBundle\Twig;

use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\Request;


class StarRatingExtension extends \Twig_Extension
{
    protected $doctrine;
    private $request;

    public function __construct(RegistryInterface $doctrine)
    {
        $this->doctrine = $doctrine;
        //$this->request = $request;
    }

    public function getFunctions() {
        return array(
            'starBar' => new \Twig_Function_Method($this, 'myStarBar'),
        );
    }

    public function myStarBar($itemId,$numStar = null, $starWidth = null) {

        //$cookies = $this->request->cookies->get('symfonyRatingSystem'.$itemId);

        //$nbrPixelsInDiv = $numStar * $starWidth; // Calculate the DIV width in pixel

        $etablissement = $this->doctrine->getRepository('AppBundle:Etablissement')->findOneById($itemId);

        $numOfVotes = 0;
        $totalRating = 0;
        $globalRating = 0;

        if (isset($etablissement)){
            if (!empty($etablissement->getVotes())){
                $numOfVotes = count($etablissement->getVotes());
                foreach ($etablissement->getVotes() as $vote){
                    $totalRating += $vote->getNbreEtoiles();
                }

                $globalRating = round($totalRating/$numOfVotes, 2);
            }
        }


        //num of pixel to colorize (in yellow)
        //$numEnlightedPX = round($nbrPixelsInDiv * $average / $numStar, 0);

        //$getJSON = array('numStar' => $numStar, 'mediaId' => $itemId); // We create a JSON with the number of stars and the media ID
        //$getJSON = json_encode($getJSON);

        /*$starBar = '<div id="group'.$itemId.'">';
        $starBar .= '<div class="star_bar" style="width:'.$nbrPixelsInDiv.'px; height:'.$starWidth.'px; background: linear-gradient(to right, #ffc600 0px,#ffc600 '.'px,#ccc '.'px,#ccc '.$nbrPixelsInDiv.'px);" rel='.$getJSON.'>';
        for ($i = 1; $i<=$numStar; $i++) {
            $starBar .= '<div title="'.$i.'/'.$numStar.'" id="'.$i.'" class="star"';
            if( !$cookies ){
                $starBar .= 'onmouseover="overStar('.$itemId.', '.$i.', '.$numStar.');" onmouseout="outStar('.$itemId.', '.$i.', '.$numStar.');" onclick="rateMedia('.$itemId.', '.$i.', '.$numStar.', '.$starWidth.');"';
            }

            $starBar .= '></div>';
        }

        $starBar .= '</div>';
        $starBar .= '<div class="resultMedia'.$itemId.'" style="font-size: small; color: grey">'; // We show the rate score and number of rates

        if (!isset($query)){
            $starBar .= 'Not rated yet';
        }
        else {
            $starBar .= 'Rating: ' . $totalRating . '/' . $numStar . ' (' . $numOfVotes . ' votes)';
            $starBar .= '</div>';
            $starBar .= '<div class="box'.$itemId.'"></div>';
            $starBar .= '</div>';
        }*/

        $starBar = '<div id="group'.$itemId.'">'.' Contenu</div>';

        return $globalRating;
    }

    public function getName()
    {
        return 'StarRating_extension';
    }

}