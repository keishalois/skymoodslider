<?php
//class for each individual programme
class Programme {
	protected $title;
	protected $mood;
	protected $imgsrc;
        protected $description;

   public function __construct($title, $mood, $imgsrc, $description) {
		$this->title = $title;
                $this->mood = $mood;
                $this->imgsrc = $imgsrc;
                $this->description = $description;
	}
    public function gettitle() {
        return $this->title;
    }
    public function getmood() {
        return $this->mood;
    }
    public function getimgsrc() {
        return $this->imgsrc;
    }
    public function getdescription() {
        return $this->description;
    }
    
    public function getHappinessProgrammes($user, $programmelibrary) {
        $happyProgrammes = [];
        // Loop through the programmelibrary array
        foreach ($programmelibrary as $programme) {
        // Check the value of the properties in the array to see if they match the user mood
            if($programme->getmood() == $user->getHappinessLevel()){
        //if the mood does match the one we are looking for, push it to the search mood array and echo values
                array_push($happyProgrammes, $programme);
        }
        }
        return $happyProgrammes;
    }
    
    
    public function getCalmnessProgrammes($user, $programmelibrary) {
        $calmProgrammes = [];
        // Loop through the programmelibrary array
        foreach ($programmelibrary as $programme) {
        // Check the value of the properties in the array to see if they match the user mood
            if($programme->getmood() == $user->getCalmnessLevel()){
        //if the mood does match the one we are looking for, push it to the search mood array and echo values
                array_push($calmProgrammes, $programme);
        }
        }
        return $calmProgrammes;
    }

    public function getTirednessProgrammes($user, $programmelibrary) {
        $tiredProgrammes = [];
        // Loop through the programmelibrary array
        foreach ($programmelibrary as $programme) {
        // Check the value of the properties in the array to see if they match the user mood
            if($programme->getmood() == $user->getTirednessLevel()){
        //if the mood does match the one we are looking for, push it to the search mood array and echo values
                array_push($tiredProgrammes, $programme);
        }
        }
        return $tiredProgrammes;
    }

    public function getScarednessProgrammes($user, $programmelibrary) {
        $scaredProgrammes = [];
        // Loop through the programmelibrary array
        foreach ($programmelibrary as $programme) {
        // Check the value of the properties in the array to see if they match the user mood
            if($programme->getmood() == $user->getScarednessLevel()){
        //if the mood does match the one we are looking for, push it to the search mood array and echo values
                array_push($scaredProgrammes, $programme);
        }
        }
        return $scaredProgrammes;
    }
    
    public function getProgrammesbyMood($user, $programmelibrary) {
        // create null programme list
        $moodProgrammes = [];
        //get programmes based on user input
        $happy = Programme::getHappinessProgrammes($user, $programmelibrary);
        $calm = Programme::getCalmnessProgrammes($user, $programmelibrary);
        $tired = Programme::getTirednessProgrammes($user, $programmelibrary);
        $scared = Programme::getScarednessProgrammes($user, $programmelibrary);
        //push matching programmes to the list to return
        if($happy){array_push($moodProgrammes, ...$happy);}
        if($calm){array_push($moodProgrammes, ...$calm);}
        if($tired){array_push($moodProgrammes, ...$tired);}
        if($scared){array_push($moodProgrammes, ...$scared);}
        return $moodProgrammes;
    }
}
