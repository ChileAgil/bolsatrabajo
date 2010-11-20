<?php 
class AppModel extends Model 
{ 

    // First, we override save(). On a successful save(),  
    // afterSave() is called. But we want something to be  
    // called on a NOT-successful save(). 
    function save($data = null, $validate = true, $fieldList = array()) { 
        $returnval = parent::save($data, $validate, $fieldList); 
        if(false === $returnval) { 
            $this->afterSaveFailed(); 
        } 
        return $returnval; 
    } 

    // This is a stub which is called after a save has failed.  
    // You will override this in the model. 
    function afterSaveFailed() { 
    } 

    // This is a (MySQL specific) check to see if a  
    // constraint was violated as the last error. If it was, 
    // the VALUE of the field which failed is returned. 
    // this is not ideal, but will do for most situations. 
    // The logic to work out the specific field which failed 
    // requires more MySQL specific SQL (such as 'show keys from...' 
    // so I shall leave it out. Most tables only have one  
    // unique constraint anyway, although our example above 
    // has 2. 
    function checkFailedConstraint() { 
        $db =& ConnectionManager::getDataSource($this->useDbConfig);  
        $lastError = $db->lastError(); 
	debug($lastError);
        // this is MYSQL SPECIFIC 
        if(preg_match('/^\d+: Duplicate entry \'(.*)\' for key \'(.*)\' $/', $lastError, $matches)) { 
			
            return $matches[1]; 
        } 
		debug($matches);
        return false; 
    } 

} 
?>