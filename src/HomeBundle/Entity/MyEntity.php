<?php 
namespace HomeBundle\Entity;

class MyEntity
{

	protected function ObjectToArray()
	{
        //Instantiate the reflection object
        $reflector = new \ReflectionClass( get_class($this) );

        //Now get all the properties from class A in to $properties array
        $properties = $reflector->getProperties(\ReflectionProperty::IS_PRIVATE);
        $result=array();
        foreach ($properties as $property)
            $result[] = $property->getName();

        $result1 = array();
        foreach($result as $property){
            $method = "get".$property;
            if ( is_array($this->$method()) )
            	$result1[$property] = "ARRAY";
            elseif (is_object($this->$method()))
				if ( get_class($this->$method()) == "DateTime")
                	$result1[$property] = $this->$method()->format('Y-m-d H:i');
                else	
                	$result1[$property] = "OBJECTs";
            else
                $result1[$property] = $this->$method();

        }

        return $result1;
        
	}

}

?>