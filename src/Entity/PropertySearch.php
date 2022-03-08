<?php
namespace App\Entity;
class PropertySearch
{
 private $nomComplet;
 public function getNomComplet(): ?string
 {
 return $this->nomComplet;
 }
 public function setNomComplet(string $nomComplet): self
 {
 $this->nomComplet = $nomComplet;
 return $this;
 }
}