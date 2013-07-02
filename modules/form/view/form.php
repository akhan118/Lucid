<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <script type="text/javascript">


        function validateForm(field)
        {
            var x = document.forms["sub"][field].value;
            if (x == null || x == "")
            {

                alert(field + "  name must be filled out");
                return false;
            }
        }
    </script>








    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Untitled Document</title>
    </head>

    <body>


        <form name="sub" action="/form/subscribe" method="post">

            <p>First Name
                <input name="First name" type="text"  onblur="validateForm('First name');"/>
            </p>
            <p>Last Name
                <input name="Last name" type="text"  onblur="validateForm('Last name');"/>
            </p>
            <p>Email 
                <input name="Email" type="text" onblur="validateForm('Email');" />
            </p>
            <p>
                <label>
                    <input type="radio" name="Gender" value="M" id="Gender_0"  />
                    Male</label>
                <br />
                <label>
                    <input type="radio" name="Gender" value="F" id="Gender_1" />
                    Female</label>
                <br />
            </p>

            <p>Address
                <input name="address" type="text"  onblur="validateForm('address');" />
            </p>
            <p>
                City  
                <input name="city" type="text" onblur="validateForm('city');" />
            </p>
            <p>State
                <input name="state" type="text" onblur="validateForm('state');" />
            </p>
            <p>Zip
                <input name="zip" type="text"  onblur="validateForm('zip');"/>
            </p>
            <p>Bio
                <textarea name="bio" cols=""  onblur="validateForm('bio');" rows=""></textarea>
            </p>
            <p>&nbsp;</p>
            <p>
                <input type="submit" name="button" id="button" value="Submit" />
            </p>
        </form>
    </body>
</html>