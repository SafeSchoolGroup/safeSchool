<?php

namespace AppBundle\Entity;

/**
 * Etablissement
 */
class Etablissement
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;
    /**
     * @var string
     */
    private $indication;
    /**
     * @var string
     */
    private $adresseRue;

    /**
     * @var string
     */
    private $adresseVille;

    /**
     * @var string
     */
    private $adressePostale;

    /**
     * @var string
     */
    private $telephone1;

    /**
     * @var string
     */
    private $telephone2;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $urlSite;

    /**
     * @var string
     */
    private $anneeCreation;

    /**
     * @var string
     */
    private $historique;

    /**
     * @var string
     */
    private $statutEtablissement;

    /**
     * @var string
     */
    private $categorieEtablissement;

    /**
     * @var string
     */
    private $niveauEtablissement;

    /**
     * @var string
     */
    private $logoEtablissement;

    /**
     * @var string
     */
    private $photoCouvertureEtablissement;

    /**
     * @var string
     */
    private $pourcentageDevoir;

    /**
     * @var string
     */
    private $pourcentagePartiel;

    /**
     * @var string
     */
    private $pourcentageTP;

    /**
     * @var string
     */
    private $longitude;

    /**
     * @var string
     */
    private $latitude;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $votes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etablissementClasses;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etablissementSalles;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $etablissementProfs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $periodes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->votes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etablissementClasses = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etablissementSalles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->etablissementProfs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->periodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Etablissement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set adresseRue
     *
     * @param string $adresseRue
     *
     * @return Etablissement
     */
    public function setAdresseRue($adresseRue)
    {
        $this->adresseRue = $adresseRue;

        return $this;
    }

    /**
     * Get adresseRue
     *
     * @return string
     */
    public function getAdresseRue()
    {
        return $this->adresseRue;
    }

    /**
     * Set adresseVille
     *
     * @param string $adresseVille
     *
     * @return Etablissement
     */
    public function setAdresseVille($adresseVille)
    {
        $this->adresseVille = $adresseVille;

        return $this;
    }

    /**
     * Get adresseVille
     *
     * @return string
     */
    public function getAdresseVille()
    {
        return $this->adresseVille;
    }

    /**
     * Set adressePostale
     *
     * @param string $adressePostale
     *
     * @return Etablissement
     */
    public function setAdressePostale($adressePostale)
    {
        $this->adressePostale = $adressePostale;

        return $this;
    }

    /**
     * Get adressePostale
     *
     * @return string
     */
    public function getAdressePostale()
    {
        return $this->adressePostale;
    }

    /**
     * Set telephone1
     *
     * @param string $telephone1
     *
     * @return Etablissement
     */
    public function setTelephone1($telephone1)
    {
        $this->telephone1 = $telephone1;

        return $this;
    }

    /**
     * Get telephone1
     *
     * @return string
     */
    public function getTelephone1()
    {
        return $this->telephone1;
    }

    /**
     * Set telephone2
     *
     * @param string $telephone2
     *
     * @return Etablissement
     */
    public function setTelephone2($telephone2)
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    /**
     * Get telephone2
     *
     * @return string
     */
    public function getTelephone2()
    {
        return $this->telephone2;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etablissement
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set urlSite
     *
     * @param string $urlSite
     *
     * @return Etablissement
     */
    public function setUrlSite($urlSite)
    {
        $this->urlSite = $urlSite;

        return $this;
    }

    /**
     * Get urlSite
     *
     * @return string
     */
    public function getUrlSite()
    {
        return $this->urlSite;
    }

    /**
     * Set anneeCreation
     *
     * @param string $anneeCreation
     *
     * @return Etablissement
     */
    public function setAnneeCreation($anneeCreation)
    {
        $this->anneeCreation = $anneeCreation;

        return $this;
    }

    /**
     * Get anneeCreation
     *
     * @return string
     */
    public function getAnneeCreation()
    {
        return $this->anneeCreation;
    }

    /**
     * Set historique
     *
     * @param string $historique
     *
     * @return Etablissement
     */
    public function setHistorique($historique)
    {
        $this->historique = $historique;

        return $this;
    }

    /**
     * Get historique
     *
     * @return string
     */
    public function getHistorique()
    {
        return $this->historique;
    }

    /**
     * Set statutEtablissement
     *
     * @param string $statutEtablissement
     *
     * @return Etablissement
     */
    public function setStatutEtablissement($statutEtablissement)
    {
        $this->statutEtablissement = $statutEtablissement;

        return $this;
    }

    /**
     * Get statutEtablissement
     *
     * @return string
     */
    public function getStatutEtablissement()
    {
        return $this->statutEtablissement;
    }

    /**
     * Set categorieEtablissement
     *
     * @param string $categorieEtablissement
     *
     * @return Etablissement
     */
    public function setCategorieEtablissement($categorieEtablissement)
    {
        $this->categorieEtablissement = $categorieEtablissement;

        return $this;
    }

    /**
     * Get categorieEtablissement
     *
     * @return string
     */
    public function getCategorieEtablissement()
    {
        return $this->categorieEtablissement;
    }

    /**
     * Set niveauEtablissement
     *
     * @param string $niveauEtablissement
     *
     * @return Etablissement
     */
    public function setNiveauEtablissement($niveauEtablissement)
    {
        $this->niveauEtablissement = $niveauEtablissement;

        return $this;
    }

    /**
     * Get niveauEtablissement
     *
     * @return string
     */
    public function getNiveauEtablissement()
    {
        return $this->niveauEtablissement;
    }

    /**
     * Set logoEtablissement
     *
     * @param string $logoEtablissement
     *
     * @return Etablissement
     */
    public function setLogoEtablissement($logoEtablissement)
    {
        $this->logoEtablissement = $logoEtablissement;

        return $this;
    }

    /**
     * Get logoEtablissement
     *
     * @return string
     */
    public function getLogoEtablissement()
    {
        return $this->logoEtablissement;
    }

    /**
     * Set photoCouvertureEtablissement
     *
     * @param string $photoCouvertureEtablissement
     *
     * @return Etablissement
     */
    public function setPhotoCouvertureEtablissement($photoCouvertureEtablissement)
    {
        $this->photoCouvertureEtablissement = $photoCouvertureEtablissement;

        return $this;
    }

    /**
     * Get photoCouvertureEtablissement
     *
     * @return string
     */
    public function getPhotoCouvertureEtablissement()
    {
        return $this->photoCouvertureEtablissement;
    }

    /**
     * Set pourcentageDevoir
     *
     * @param string $pourcentageDevoir
     *
     * @return Etablissement
     */
    public function setPourcentageDevoir($pourcentageDevoir)
    {
        $this->pourcentageDevoir = $pourcentageDevoir;

        return $this;
    }

    /**
     * Get pourcentageDevoir
     *
     * @return string
     */
    public function getPourcentageDevoir()
    {
        return $this->pourcentageDevoir;
    }

    /**
     * Set pourcentagePartiel
     *
     * @param string $pourcentagePartiel
     *
     * @return Etablissement
     */
    public function setPourcentagePartiel($pourcentagePartiel)
    {
        $this->pourcentagePartiel = $pourcentagePartiel;

        return $this;
    }

    /**
     * Get pourcentagePartiel
     *
     * @return string
     */
    public function getPourcentagePartiel()
    {
        return $this->pourcentagePartiel;
    }

    /**
     * Set pourcentageTP
     *
     * @param string $pourcentageTP
     *
     * @return Etablissement
     */
    public function setPourcentageTP($pourcentageTP)
    {
        $this->pourcentageTP = $pourcentageTP;

        return $this;
    }

    /**
     * Get pourcentageTP
     *
     * @return string
     */
    public function getPourcentageTP()
    {
        return $this->pourcentageTP;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Etablissement
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Etablissement
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Add vote
     *
     * @param \AppBundle\Entity\Vote $vote
     *
     * @return Etablissement
     */
    public function addVote(\AppBundle\Entity\Vote $vote)
    {
        $this->votes[] = $vote;

        return $this;
    }

    /**
     * Remove vote
     *
     * @param \AppBundle\Entity\Vote $vote
     */
    public function removeVote(\AppBundle\Entity\Vote $vote)
    {
        $this->votes->removeElement($vote);
    }

    /**
     * Get votes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * Add etablissementClass
     *
     * @param \AppBundle\Entity\EtablissementClasse $etablissementClass
     *
     * @return Etablissement
     */
    public function addEtablissementClass(\AppBundle\Entity\EtablissementClasse $etablissementClass)
    {
        $this->etablissementClasses[] = $etablissementClass;

        return $this;
    }

    /**
     * Remove etablissementClass
     *
     * @param \AppBundle\Entity\EtablissementClasse $etablissementClass
     */
    public function removeEtablissementClass(\AppBundle\Entity\EtablissementClasse $etablissementClass)
    {
        $this->etablissementClasses->removeElement($etablissementClass);
    }

    /**
     * Get etablissementClasses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementClasses()
    {
        return $this->etablissementClasses;
    }

    /**
     * Add etablissementSalle
     *
     * @param \AppBundle\Entity\Salle $etablissementSalle
     *
     * @return Etablissement
     */
    public function addEtablissementSalle(\AppBundle\Entity\Salle $etablissementSalle)
    {
        $this->etablissementSalles[] = $etablissementSalle;

        return $this;
    }

    /**
     * Remove etablissementSalle
     *
     * @param \AppBundle\Entity\Salle $etablissementSalle
     */
    public function removeEtablissementSalle(\AppBundle\Entity\Salle $etablissementSalle)
    {
        $this->etablissementSalles->removeElement($etablissementSalle);
    }

    /**
     * Get etablissementSalles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementSalles()
    {
        return $this->etablissementSalles;
    }

    /**
     * Add etablissementProf
     *
     * @param \AppBundle\Entity\EtablissementProf $etablissementProf
     *
     * @return Etablissement
     */
    public function addEtablissementProf(\AppBundle\Entity\EtablissementProf $etablissementProf)
    {
        $this->etablissementProfs[] = $etablissementProf;

        return $this;
    }

    /**
     * Remove etablissementProf
     *
     * @param \AppBundle\Entity\EtablissementProf $etablissementProf
     */
    public function removeEtablissementProf(\AppBundle\Entity\EtablissementProf $etablissementProf)
    {
        $this->etablissementProfs->removeElement($etablissementProf);
    }

    /**
     * Get etablissementProfs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtablissementProfs()
    {
        return $this->etablissementProfs;
    }

    /**
     * Add periode
     *
     * @param \AppBundle\Entity\Periode $periode
     *
     * @return Etablissement
     */
    public function addPeriode(\AppBundle\Entity\Periode $periode)
    {
        $this->periodes[] = $periode;

        return $this;
    }

    /**
     * Remove periode
     *
     * @param \AppBundle\Entity\Periode $periode
     */
    public function removePeriode(\AppBundle\Entity\Periode $periode)
    {
        $this->periodes->removeElement($periode);
    }

    /**
     * Get periodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPeriodes()
    {
        return $this->periodes;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $examens;


    /**
     * Add examen
     *
     * @param \AppBundle\Entity\Examen $examen
     *
     * @return Etablissement
     */
    public function addExamen(\AppBundle\Entity\Examen $examen)
    {
        $this->examens[] = $examen;

        return $this;
    }

    /**
     * Remove examen
     *
     * @param \AppBundle\Entity\Examen $examen
     */
    public function removeExamen(\AppBundle\Entity\Examen $examen)
    {
        $this->examens->removeElement($examen);
    }

    /**
     * Get examens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamens()
    {
        return $this->examens;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $dirigeants;


    /**
     * Add dirigeant
     *
     * @param \AppBundle\Entity\EtablissementDirigeant $dirigeant
     *
     * @return Etablissement
     */
    public function addDirigeant(\AppBundle\Entity\EtablissementDirigeant $dirigeant)
    {
        $this->dirigeants[] = $dirigeant;

        return $this;
    }

    /**
     * Remove dirigeant
     *
     * @param \AppBundle\Entity\EtablissementDirigeant $dirigeant
     */
    public function removeDirigeant(\AppBundle\Entity\EtablissementDirigeant $dirigeant)
    {
        $this->dirigeants->removeElement($dirigeant);
    }

    /**
     * Get dirigeants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDirigeants()
    {
        return $this->dirigeants;
    }

    /**
     * Set indication
     *
     * @param string $indication
     *
     * @return Etablissement
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;

        return $this;
    }

    /**
     * Get indication
     *
     * @return string
     */
    public function getIndication()
    {
        return $this->indication;
    }
}
