<?php
//include the programme library class as this contains the xml data upload
include_once __DIR__ . '/../models/programmelibrary.php';
//include the user class as this controls the user mood input
include_once __DIR__ . '/../models/user.php';

class ProgrammeController {
    
        public function addProgrammes() {
            ProgrammeLibrary::uploadForm();
        }
        
	public function view() {
        $happyLevel = ((isset($_GET['happyVal']))) ? ($_GET['happyVal']) : 'not entered';
        $calmLevel = ((isset($_GET['calmVal']))) ? ($_GET['calmVal']) : 'not entered';
        $tiredLevel = ((isset($_GET['tiredVal']))) ? ($_GET['tiredVal'])  : 'not entered';
        $scaredLevel = ((isset($_GET['scaredVal']))) ? ($_GET['scaredVal'])  : 'not entered';
        $user = User::usermoods($happyLevel, $tiredLevel, $calmLevel, $scaredLevel);
        $programmelibrary = ProgrammeLibrary::getXmlData();
        $moodProgrammes = Programme::getProgrammesbyMood($user, $programmelibrary);
        require_once('views/programmes/view.php');
            }
}