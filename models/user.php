<?php

class User {
	protected $happinessLevel;
	protected $calmnessLevel;
	protected $tirednessLevel;
	protected $scarednessLevel;

   public function __construct($happinessLevel, $calmnessLevel, $tirednessLevel, $scarednessLevel) {
	$this->happinessLevel = $happinessLevel;
        $this->calmnessLevel = $calmnessLevel;
        $this->tirednessLevel = $tirednessLevel;
        $this->scarednessLevel = $scarednessLevel;
	}

    public function getHappinessLevel() {
        return $this->happinessLevel;
    }
    public function getCalmnessLevel() {
        return $this->calmnessLevel;
    }
    public function getTirednessLevel() {
        return $this->tirednessLevel;
    }  
    public function getScarednessLevel() {
        return $this->scarednessLevel;
    }
    
    public function checkHappyMood($happy) {
        switch (true) {
            case $happy == 0: $happyLevel = 'happy'; break;
            case $happy == 2: $happyLevel = 'sad'; break;
            default: $happyLevel = 'uncomplete';
        }
        return $happyLevel;
    }

    public function checkCalmMood($calm) {
        switch (true) {
            case $calm == 0: $calmLevel = 'calm'; break;
            case $calm == 2: $calmLevel = 'agitated'; break;
            default: $calmLevel = 'uncomplete';
        }
        return $calmLevel;
    }
    
    public function checkTiredMood($tired) {
        switch (true) {
            case $tired == 0: $tiredLevel = 'awake'; break;
            case $tired == 2: $tiredLevel = 'tired'; break;
            default: $tiredLevel = 'uncomplete';
        }
        return $tiredLevel;
    }
    
    public function checkScaredMood($scared) {
        switch (true) {
            case $scared == 0: $scaredLevel = 'fearless'; break;
            case $scared == 2: $scaredLevel = 'scared'; break;
            default: $scaredLevel = 'uncomplete';
        }
        return $scaredLevel;
    }
    
    public function usermoods($happy, $tired, $calm, $scared){
        //assign mood values based on user slider input
        $happyLevel = User::checkHappyMood($happy);
        $tiredLevel = User::checkTiredMood($tired);
        $calmLevel = User::checkCalmMood($calm);
        $scaredLevel = User::checkScaredMood($scared);
        //return input choices as a new user object
        return $userchoice = new User($happyLevel, $calmLevel, $tiredLevel, $scaredLevel);
    }
}

