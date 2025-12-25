Refresh token:


Auth code: https://www.dropbox.com/oauth2/authorize?client_id=APPKEYHERE&response_type=code&token_access_type=offline


Utána:
curl --location --request POST 'https://api.dropboxapi.com/oauth2/token' \
    --user 'APPKEYHERE:APPSECRETKEYHERE' \
    --header 'Content-Type: application/x-www-form-urlencoded' \
    --data-urlencode 'code=AUTHCODE' \
    --data-urlencode 'grant_type=authorization_code'

Response: {
    "access_token": "sl.u.AGM0354ivnNiyokI-7E26IEZUEOIwPBGno8LcTgeO3iYGas1VMRo1EACe1yrxNydDNnGN-KZo6-xRqBbqQh7fD_pt8cCbabMHwL9itSgVVqwtPeO8nV-ftiJcukdlooOd7ayUnO7XNsReuvB5vpqQIkv1DrpRb5H8734DNo9mNMjt34FfCQay33b-iIuHuKmOSEC81uOZLrTafBWIG2cEdA6cgM82Sq8SxtuW7lUB9m4DqMJovuONNwZgDdg5-Zz6uh8HQxtQ0oh7D4TnaHzACdvovIqh16gTBbhP3CU12wQuhOXdPA6nqOlIReFvfkGNgc29PTpwN6siTuaOl6YOII-VwKb1v7JtSolMVUzFTsoV1F_W0PNK7l_yVO9b8JiEfkyi0zckIjbnNmdw9p5Y3LJW2DBsEChcUAtPDXfdq4uCnuksCjDEeG-qXLxFMjzUaDANGZ0ZkZQmalf-wTgip6IxfHJSZMqrzIhNsRQBxsRozm4s6yjqSjXigKq3YHRvonCUDpCtWsHzLctgYUS1-PItCa-NXdRMpoDsYtrfENA_7yTw5iQxRuw3HDAOzEoyASh1MvGnWRylrLSZW_64RuTdEu4HkoeuXyW_XGrWPUhSzcZ2SXQuCfjkc9ieGLeTp0PTZnau128__z_U8rybX4loAHOiW8yDmzNhKgqfwMRSZoCu8zoVMeuWtLD2qKTyGxb1AGAcH5x_q13RgZuLacIkI-omj5Jl_xcMcLVdBCNMqrLQRwfVqW74SsyH5s31fCBPosKQBc3OPMr5GpaWvY0L_kC88b91AwcqSd6lR-AWKbwdH9hJgKVWvePMeHN1WT7vTanAvHeTYJOYjZjh3IvTYV-TNIyYJrPOC2KeeqaSxxfZEZMW7GavcHU_KYLAL60ZXFJD4OXSyVhcQ4jqLQqdopmJF1Ou3EtEksQHXpCoBuGI30Sm2a7xGh2WqBA8gFaH7zqrSkQqVK0wzNwe3QU0Zhn8E0bYLfwrrhaxHeY_-wa9i1k2SSodBDqYnP2TDjLhFt4ZGvf6IoGnXvUETX5qt4QlucBsdSRWxA01kMeo4-knfJiupZjRbrczJW5TAUCrNhgvuyDZhKgqklYke9y1JVy2e_D45AEvnE8ZzsAJxfNwOb4ai7UDbaksXNBDrdgPFFHLDccQeNl6tGDYwcFb4Z60Ei7n30L1jm-iCvuYUmNNqGylorYG5hxEMgiQnbS3fLLmTcELLtjU93dTaweqXpfZJ4tfeLhH9VXsP9LqoUb73_-B3Hyg4tdigTd64RgbBHEnVSWAr42a21AvK-GvEsLTOdzp3kC6tpa8maOqZ957Sukcf-476SPYPDbouLJ1xNJdqZbAQ6duBdFDb9OXIWHqqsd0FJHD_R2ku5e3vb38ri-ZSRsA9rAxtSIFqUXDzJybpa1m-BIHMfe1zH2m5gIK9DWS_9Zq8CJ9frVAw",
    "token_type": "bearer",
    "expires_in": 14400,
    "refresh_token": "AixFe54VhJUAAAAAAAAAAY8y8CcJFFBFdcG6UClCVRYzwB1gN7fkdQGxT0NcoJfs",
    "scope": "account_info.read files.content.read files.content.write files.metadata.read files.metadata.write",
    "uid": "1986289587",
    "account_id": "dbid:AADdffmZFXg5lXYRkDc8DaTnfiqXXGspsxI"
}