<?php 

class TaskController
{
    public function processRequest(string $method, ?string $id) : void
    {
        if ($id === null) {
            if($method === "GET"){
                echo "Index";
            } elseif ($method === "POST"){
                echo "Create";
            } else {
                echo "Method $method not allowed";
                $this->respondMethodNotAllowed("GET, POST");
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
                    echo "Method $method not allowed";
                    $this->respondMethodNotAllowed("GET, PATCH, DELETE");
            }
        }
    }

    private function respondMethodNotAllowed(string $allowed_methods) : void
    {
        http_response_code(405);
        header("Allowed: $allowed_methods");
    }
}