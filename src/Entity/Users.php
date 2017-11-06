<?php
/**
 * Created by PhpStorm.
 * User: tom.defabritiis
 * Date: 06/11/17
 * Time: 16:12
 */

Class Users
{
    /**
     * @var int
     * @Id()
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(type="string", length=40)
     */
    protected $nom;

    /**
     * @var string
     *
     * @Column(type="string", length=40)
     */
    protected $prenom;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getDiscord()
    {
        return $this->discord;
    }

    /**
     * @param string $discord
     */
    public function setDiscord($discord)
    {
        $this->discord = $discord;
    }

    /**
     * @var string
     *
     * @Column(type="string", length=40)
     */
    protected $discord;


}