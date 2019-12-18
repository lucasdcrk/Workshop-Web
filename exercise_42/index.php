<?php

    /*
    |--------------------------------------------------------------------------
    | API
    |--------------------------------------------------------------------------
    |
    | Retreive data from this API https://randomapi.com/api/6de6abfedb24f889e0b5f675edc50deb?fmt=raw&sole
    | Display each field of each element in a table
    |
    | Because of RGPD you NEED to protect user data, so please display
    | only the first letter of their Last name (eg: Nathan D.).
    |
    | You also need to display their avatar, for this you're going to use
    | the gravatar.com API by passing the md5 hash of users' emails.
    |
    | Because we're in France, please convert the balance field
    | (which is in USD) in EUR using today's rate (1.00€ == 1.11$).
    |
    | Have fun!
    |
    | Preview: http://localhost:8080/exercise_42
    |
    */


?>

<html>
    <body>
    <table>
    <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Avatar</th>
            <th>Email</th>
            <th>Address</th>
            <th>Balance (€)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Jean</td>
            <td>P.</td>
            <td><img src="http://gravatar.com/avatar/1db90c47f6247d8e8eb7ad745dea7d0f?size=200" alt="Jean"></td>
            <td>jeanpaul@epifroid.fr</td>
            <td>1 rue de la paix</td>
            <td>137.25€</td>
        </tr>
    </tbody>
    </table>
    </body>
</html>