<?php

// src/YS/DiscussBundle/Entity/Discuss.php

namespace YS\DiscussBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

/**
 * Discuss
 *
 * @ORM\Table(name="discuss")
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass="YS\DiscussBundle\Repository\DiscussRepository")
 */
class Discuss
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="discuss", type="text")
     */
    private $discuss;

    /**
     * @var bool
     *
     * @ORM\Column(name="draft", type="boolean")
     */
    private $draft = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="enabled", type="boolean")
     */
    private $enabled = true;

    /**
     * @ORM\ManyToOne(targetEntity="Discuss")
     */
    private $parent;

    /**
     * @ORM\ManyToOne(targetEntity="YS\UserBundle\Entity\User")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    private $user;

    /**
     * @var \DateTime $createdAt
     *
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @var \DateTime $updatedAt
     *
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    public function __construct(TokenStorage $tokenStorage = null)
    {
      if ($this->user == null && $tokenStorage) {
        $this->user = $tokenStorage->getToken()->getUser();
      }
    }

    /**
     *
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updatedTimestamps()
    {
      $this->updatedAt = new \DateTime();

      if ($this->createdAt == null) {
        $this->createdAt = new \DateTime();
      }
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set body
     *
     * @param string $discuss
     *
     * @return Discuss
     */
    public function setDiscuss($discuss)
    {
        $this->discuss = $discuss;

        return $this;
    }

    /**
     * Get discuss
     *
     * @return string
     */
    public function getDiscuss()
    {
        return $this->discuss;
    }

    /**
     * Set draft
     *
     * @param boolean $draft
     *
     * @return Discuss
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;

        return $this;
    }

    /**
     * Get draft
     *
     * @return bool
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return Discuss
     */
    public function setEnabled($enabled)
    {
      $this->enabled = $enabled;

      return $this;
    }

    /**
     * Get enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
      return $this->enabled;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
      return $this->createdAt;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
      return $this->updatedAt;
    }

    public function setParent(Discuss $discuss)
    {
      $this->discuss = $discuss;
    }

    public function getParent()
    {
      return $this->discuss;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return Discuss
     */
    public function setUser($user)
    {
      $this->user = $user;

      return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @return string
     */
    public function __toString()
    {
      return (string)$this->getDiscuss();
    }
}

