<?php

require_once('Route.class.php');

class Regions extends Route {
    
    public function __construct($esi) {
        parent::__construct($esi);
        $this->setRoute('/v2/universe/regions/');
        $this->setCacheInterval(300);
    }
    
    public function getRegion($regionID) {
        if (!is_numeric($regionID) && $regionID > 0) throw new Exception("getRegion() regionID must be numeric and > 0.");
        inform(get_class(), "Updating Region $regionID...");
        $data = $this->get($regionID . '/');
        if ($this->ESI->getDEBUG()) var_dump($data);
        if (is_object($data) && isset($data->name)) {
            return $data;
        } else {
            $msg = "getRegion() Cannot get region information for $regionID using " . $this->getRoute();
            warning(get_class(), $msg);
            throw new Exception($msg);
        }
        return FALSE;
    }
    
    public function update() {
        //$this->getCharacter($this->ESI->getCharacterID() .'/');
    }
    
}