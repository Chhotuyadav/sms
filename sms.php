   //sms



          $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => "msg.msgclub.net/rest/services/sendSMS/sendGroupSms?AUTH_KEY=fc6419749a6e51a82dfbf1ca4ab8238f",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => '{"smsContent":"Congratulations your registration has been successfully Completed. Please wait for admin approval, After admin approval you are able to post your property details. RELMKR","routeId":"1","mobileNumbers":'.$contact.',"senderId":"RELMKR","signature":"signature","smsContentType":"english"}',
              CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json"
              ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
              echo "cURL Error #:" . $err;
            }
            else{
                if ($response) {
                    //echo $response;
                    //echo "ok";
                }
                else{
                    echo "error";
                }
                
            }

        //sms
