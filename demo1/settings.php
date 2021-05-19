<?php

    $spBaseUrl = 'http://localhost/php-saml-master'; //or http://<your_domain>

    $settingsInfo = array (
        'sp' => array (
            'entityId' => $spBaseUrl.'/demo1/metadata.php',
            'assertionConsumerService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?acs',
            ),
            'singleLogoutService' => array (
                'url' => $spBaseUrl.'/demo1/index.php?sls',
            ),
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
            'privateKey' => 'MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAOLWjQgBelmWYumfRQZ0utbZfNROUanV1yQX6jlcPFjnSmLz+h1txZa5bQyoieQHPCWc5+g6tqgY9EhKsapWZJme1IhELg3+jSzLZc5/EEIfIcl8+tsYyoo3wGSOYPu/ds3pxWa30JLPGDxrPOrs2dwF1fgGrgvDap/u43/VIUFzAgMBAAECgYB72XSq+FOa8lcTAximy7jvcVOMfy5rMgwC8uO5abixOacNm/PleXe2MYtuq96Nl72pM6AS1WvBH87QYafbPswxZIVq4mkeWf7WSPRddUKPQURU8A8YNXX1lAYjj8T8zYDq5O7LzuLzIbrprHqUi/DDGh91lAKZ1QqYKBq7vRvbkQJBAPqCr7m9WZoNoxH8JaFPClWWpgPXPeOeLM0fWUTpHqXqojVo29XZRQvlFrDVNe+pQaix3Pxj483egJUb8unTkCUCQQDnzxEphrh2btoR7+NgvO+WAYOu6WAE3YeoC3ZNvh26vSz+T9wLfCWtsXhovhi7gLX86O0gd5Z/bLENjL38Qyu3AkB3aKnoqGg4dX2gigdJ38o2R+v0crnucKw8TlAX9+MDBVeyi7wWME2oQNfTDJ58EbrZdYa3y8l/jSrPaJYefRj9AkEA50kN+Z3mfJxbzlvIRWQdtFCsf59wY0pZKMzO7ACNjx1jQBaUGY1z1prk5bUN3j8s1TveJG/NZDQhb8CGaqTmfwJBAOFo4VEq9yotfc/EYwCX51Ncn7Qry75cPhcuSCde1Yb0iXOF29VgOrbtOrEa3UqISCqqTBjaQCk3kneMfpooO64='
        ),
        'idp' => array (
            'entityId' => 'https://app.onelogin.com/saml/metadata/6066d23b-90b8-4378-bb9d-9cc3037272c1',
            'singleSignOnService' => array (
                'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-post/sso/6066d23b-90b8-4378-bb9d-9cc3037272c1',
            ),
            'singleLogoutService' => array (
                'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-redirect/slo/1451714',
            ),
            'x509cert' => 'MIID6zCCAtOgAwIBAgIUSTtiK1AHONFm9NlJ44ppLBi4TyAwDQYJKoZIhvcNAQEFBQAwSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMB4XDTIxMDQxOTEwMzkwOFoXDTI2MDQxOTEwMzkwOFowSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuWTWyc1oY9qC+3JgMECCLuuVTXJszYyXplVRsWhmpdZnMRQHyyCKCHG3sPnm3RJ3hcUOaDXP2UrJZHCF01wPcw5wAI6CDHojibYswNbrjTeNJ8Z8N77FMLFUHFk4/aCTstGqd3eLyIHBmCm9JkNgwTU5yNPF3/gZeN4+ixruEO08LeeVgRUfNp+f9ZZFgM9tRryqhyCRbVoPsc8DUKIPEVi6hw6gXeiQtZK342ngXJRg7c8/igErqrb3VfPdBy2GV29jjfEqgfrD+2Ck7s8tsIM2rmFefWLfNlKjWPdFXbbIEmNL7jttxXMsguT5sIEC2oUCXZFyr+IIRZ87ItpNSwIDAQABo4HIMIHFMAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFIWox5fAcUdHyHBzveSnO9V1pQciMIGFBgNVHSMEfjB8gBSFqMeXwHFHR8hwc73kpzvVdaUHIqFOpEwwSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgghRJO2IrUAc40Wb02UnjimksGLhPIDAOBgNVHQ8BAf8EBAMCB4AwDQYJKoZIhvcNAQEFBQADggEBAEHhRaJvPTepEBZBaZxNa2cExolQ52KSuVJmw1F2FH9HiawayE0BGGworcGOOipPHgUHom1RhJ4+mlZhpmCzSUA5ghJNVfh4lVaA+Hxxl0QT8UDSM3SWjk8uPle5zJM1DEsLAjBlf48WQ4HyB1utM5gDod3hAzN4tjKNnFzBcTlW8Dc9WiAviAY24VckauuGw0VW9mDVGAPDAjpuV4kE+nLvgTL1VmsBWuwQSf26w7JMgbpzQn2L4Au8Gxzp8/W51qzyEarA/WvjFOsBnaNEdQPIgLrFEgcdFBIZURyU6x90CTcENGnpMNs0xMFM9ZpSfFfIDBLTosxZNCqjW/hK3/U=',

            'privateKey' => 'MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAOLWjQgBelmWYumfRQZ0utbZfNROUanV1yQX6jlcPFjnSmLz+h1txZa5bQyoieQHPCWc5+g6tqgY9EhKsapWZJme1IhELg3+jSzLZc5/EEIfIcl8+tsYyoo3wGSOYPu/ds3pxWa30JLPGDxrPOrs2dwF1fgGrgvDap/u43/VIUFzAgMBAAECgYB72XSq+FOa8lcTAximy7jvcVOMfy5rMgwC8uO5abixOacNm/PleXe2MYtuq96Nl72pM6AS1WvBH87QYafbPswxZIVq4mkeWf7WSPRddUKPQURU8A8YNXX1lAYjj8T8zYDq5O7LzuLzIbrprHqUi/DDGh91lAKZ1QqYKBq7vRvbkQJBAPqCr7m9WZoNoxH8JaFPClWWpgPXPeOeLM0fWUTpHqXqojVo29XZRQvlFrDVNe+pQaix3Pxj483egJUb8unTkCUCQQDnzxEphrh2btoR7+NgvO+WAYOu6WAE3YeoC3ZNvh26vSz+T9wLfCWtsXhovhi7gLX86O0gd5Z/bLENjL38Qyu3AkB3aKnoqGg4dX2gigdJ38o2R+v0crnucKw8TlAX9+MDBVeyi7wWME2oQNfTDJ58EbrZdYa3y8l/jSrPaJYefRj9AkEA50kN+Z3mfJxbzlvIRWQdtFCsf59wY0pZKMzO7ACNjx1jQBaUGY1z1prk5bUN3j8s1TveJG/NZDQhb8CGaqTmfwJBAOFo4VEq9yotfc/EYwCX51Ncn7Qry75cPhcuSCde1Yb0iXOF29VgOrbtOrEa3UqISCqqTBjaQCk3kneMfpooO64='
        ),
    );


