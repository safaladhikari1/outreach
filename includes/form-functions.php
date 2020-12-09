<?php
    function validName($name)
    {
        if (!empty($name))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validContactInfo($email, $phone)
    {
        if(!empty($email) AND !empty($phone))
        {
            if(validEmail($email))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else if(!empty($email) AND empty($phone))
        {
            if(validEmail($email))
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else if(empty($email) AND !empty($phone))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validAddress($address)
    {
        if(!empty($address))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validZipcode($zipcode)
    {
        if($zipcode == "98030" || $zipcode == "98031" || $zipcode == "98032" || $zipcode == "98042" ||
            $zipcode == "98058")
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validServices($services)
    {
        $validServices = array("Utilities", "Rent", "Gas", "Clothing and Household", "Driver License", "Food", "Other");

        foreach ($services as $service)
        {
            if (!in_array($service, $validServices))
            {
                return false;
            }
        }

        return true;
    }

    function selectedOtherService($services)
    {
        $otherService = "Other";

        foreach ($services as $service)
        {
            if ($service == $otherService)
            {
                return true;
            }
        }

        return false;
    }

    function validOtherServiceText($otherServiceText)
    {
        if (!empty($otherServiceText))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
