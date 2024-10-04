<?php
class Experience {
    private $title;
    private $companyName;
    private $startDate;
    private $endDate;
    private $description;
    private $duties;
    private $image;

    public function __construct($title, $companyName, $startDate, $endDate, $description, $duties, $image) {
        $this->title = $title;
        $this->companyName = $companyName;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->description = $description;
        $this->duties = $duties;
        $this->image = $image;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getCompanyName() {
        return $this->companyName;
    }

    public function getStartDate() {
        return $this->startDate;
    }

    public function getEndDate() {
        return $this->endDate;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDuties() {
        return $this->duties;
    }

    public function getExpImage() {
        return $this->image;
    }
}
?>
