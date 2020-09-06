<?php
class RestroMenu {
    private $menuList;
    function __construct(array $menuList) 
    {
        if (sizeof($menuList)>0) 
        {
            $this->menuList = $menuList;
        } 
        else 
        {
            throw new Exception("There is No such available");
        }
    }
    public function menu_name() {
        $menuNameList = [];

        foreach($this->menuList as $restro) {
            $restaurantNameList[] = array(
                "name"=>$restro['name']
            );
        }

        return json_encode($restaurantNameList);
    }
    public function menu_details($name)
    {
        $data_resp=["Invalid choice"];
        if($name){
            foreach($this->menuList as $restro)
            {
                
                if($restro['name'] == $name)
                {
                    
                        $data_resp=$restro;
                        break;
                }
            }
        }
        return json_encode($data_resp);
    }    
}
?>