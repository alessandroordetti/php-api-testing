<?php 

class TaskController
{
    public function processRequest($method, $id){
        if ($id === null) {
            if($method === "GET"){
                echo "Index";
            } elseif ($method === "POST"){
                echo "Create";
            }
        } else {
            switch ($method){
                case "GET":
                    echo "Show $id";
                    break;

                case "PATCH":
                    echo "Update $id";
                    break;

                case "DELETE":
                    echo "Delete $id";
                    break;

                default:
                    echo "Method not allowed";
                    http_response_code(405);
            }
        }
    }
}