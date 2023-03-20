<?php
class Hippopotamus {
    private string $name;
    private int $weight;
    private int $tusksSize;

    public function __construct(string $name, int $weight, int $tusksSize) {
        $this->name = $name;
        $this->weight = $weight;
        $this->tusksSize = $tusksSize;
    }



    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        if (!empty($name)) {
        $this->name = $name;   
        } else {
            throw new ErrorException();
        }
    }

    public function getWeight(): ?int
    {
        return $this->weight;
    }
    
    public function setWeight(int $weight): self
    {
        if (!empty($weight)) {
            $this->weight = $weight;
        } else {
            throw new ErrorException();
        }

        return $this;
    }

    public function getTusksSize(): ?int
    {
        return $this->tusksSize;
    }
    
    public function setTusksSize(int $tusksSize): self
    {
        if (!empty($tusksSize)) {
            $this->tusksSize = $tusksSize;
        } else {
            throw new ErrorException();
        }

        return $this;
    }
    



    public function swim(): void {
        $this->weight -= 0.3;
    }

    public function eat(): void {
        $this->weight += 1;
    }

    public function fight(Hippopotamus $hippo): string {
        if ($this->tusksSize > $hippo->tusksSize) {
            return $this->name . " a gagné le combat";
        } else {
            return $hippo->name . " a gagné le combat";
        }
    }

    public function __toString(): string {
        return "Name: " . $this->name . ", Weight: " . $this->weight . ", Tusks Size: " . $this->tusksSize;
    }

}



$hippo = new Hippopotamus("Hippo", 1000, 25);

for ($i = 1; $i <= 3; $i++) {
    echo "Jour " . $i . " :\n";
    for ($j = 1; $j <= 15; $j++) {
        $hippo->eat();
        $hippo->eat();
        $hippo->swim();
        $hippo->swim();
        $hippo->swim();
    }
    echo $hippo . "\n";
}

?>
