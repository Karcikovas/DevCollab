<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SkillsRepository")
 */
class Skills
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_fk;

    /**
     * @ORM\Column(type="integer")
     */
    private $skill_fk;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $branch;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserFk(): ?int
    {
        return $this->user_fk;
    }

    public function setUserFk(int $user_fk): self
    {
        $this->user_fk = $user_fk;

        return $this;
    }

    public function getSkillFk(): ?int
    {
        return $this->skill_fk;
    }

    public function setSkillFk(int $skill_fk): self
    {
        $this->skill_fk = $skill_fk;

        return $this;
    }

    public function getBranch(): ?string
    {
        return $this->branch;
    }

    public function setBranch(?string $branch): self
    {
        $this->branch = $branch;

        return $this;
    }
}
