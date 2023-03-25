<?php
    class person{
        var $name;                    # This property(variable) is named $name
        function set_name($new_name){ #This method 'set_name' uses '$new_name' argument
            $this->name = $new_name;  # $name property is then set to the data in $new_name
            
        }
        
        function get_name(){          #This method is named as 'get_name'
            return $this->name;       #This statement returns $name
        }

        
    }

    
?>