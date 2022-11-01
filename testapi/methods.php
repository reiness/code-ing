<?php

class Mahasiswa
{
    public function get_mhss()
    {
        // $data="Hore aku API";
        $semuaDataMahasiswa = [];
        if (file_exists("data.json")) {

            $jsonFile = file_get_contents('data.json');
            $semuaDataMahasiswa = json_decode($jsonFile, true);
        } 

        $response=[
            'status' => 200,
            'message' => 'Get List Mahasiswa Success.',
            'data' => $semuaDataMahasiswa
        ];

        header('Content-Type: application/json');
        echo json_encode($response); //return json
        
    }

    public function insert_mhs(string $nama, string $nim): void
    {
        $dataMhs[] = [
            'id'=> 1,
            'nama' => $nama,    
            'nim' => $nim,
        ];

        $responseArray = [
            "status" => 400,
            "message" => "Oops! Error creating json file..."
        ];
        
        if (!file_exists("data.json")) {
            if (file_put_contents("data.json", json_encode($dataMhs))) {
                $responseArray['message'] = "JSON file created successfully...";
                $responseArray['status'] = 200;
            }

        } else {
            $jsonFile = file_get_contents('data.json');
            $tempArray = json_decode($jsonFile, true);
            $dataMhs[0]["id"] = count($tempArray)+1;
            array_push($tempArray, $dataMhs[0]);
            $jsonData = json_encode($tempArray);
            if(file_put_contents('data.json', $jsonData)) {
                $responseArray['message'] = "Data inputted to JSON successfully...";
                $responseArray['status'] = 200;
            }
        }

        echo json_encode($responseArray);
    }
}

?>