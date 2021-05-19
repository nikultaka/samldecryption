<?php

$settings = array (
    // If 'strict' is True, then the PHP Toolkit will reject unsigned
    // or unencrypted messages if it expects them signed or encrypted
    // Also will reject the messages if not strictly follow the SAML
    // standard: Destination, NameId, Conditions ... are validated too.
    'strict' => true,

    // Enable debug mode (to print errors)
    'debug' => true,

    // Set a BaseURL to be used instead of try to guess
    // the BaseURL of the view that process the SAML Message.
    // Ex. http://sp.example.com/
    //     http://example.com/sp/
    'baseurl' => null,

    // Service Provider Data that we are deploying
    'sp' => array (
        // Identifier of the SP entity  (must be a URI)
        'entityId' => 'https://app.onelogin.com/saml/metadata/f4a437d9-8a0c-415c-879b-c51b5d2c11fd',
        // Specifies info about where and how the <AuthnResponse> message MUST be
        // returned to the requester, in this case our SP.
        'assertionConsumerService' => array (
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-post/sso/f4a437d9-8a0c-415c-879b-c51b5d2c11fd',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-POST binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        ),
        // If you need to specify requested attributes, set a
        // attributeConsumingService. nameFormat, attributeValue and
        // friendlyName can be omitted. Otherwise remove this section.
        "attributeConsumingService"=> array(
                "serviceName" => "SP test",
                "serviceDescription" => "Test Service",
                "requestedAttributes" => array(
                    array(
                        "name" => "",
                        "isRequired" => false,
                        "nameFormat" => "",
                        "friendlyName" => "",
                        "attributeValue" => ""
                    )
                )
        ),
        // Specifies info about where and how the <Logout Response> message MUST be
        // returned to the requester, in this case our SP.
        'singleLogoutService' => array (
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-redirect/slo/1425707',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // Specifies constraints on the name identifier to be used to
        // represent the requested subject.
        // Take a look on lib/Saml2/Constants.php to see the NameIdFormat supported
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:unspecified',

        // Usually x509cert and privateKey of the SP are provided by files placed at
        // the certs folder. But we can also provide them with the following parameters
        'x509cert' => '',
        'privateKey' => 'MIICdwIBADANBgkqhkiG9w0BAQEFAASCAmEwggJdAgEAAoGBAN+truD5vC+HBtB5ASsGVl3iDayM3YFAyfjlElXrzMUfLbWn6koCl3Fwnh2myXG4W8Lyuo9T92jiaxPZoD/xo8cUvhOu77olAvVwKOJQQkGQYlc1PBOUoOG8RX62Fs4Av0CupBRO3M9Jx7QxcLsuY4QTww+b0yatk+VHpaWDtylbAgMBAAECgYBkvse7kQAPsBODply+UjZoRr697xx9cP8HWbWueWxbhLWD0kOWXiBz+bNdy5eD3vOFlOouUDVpSkHMSQMCigWnd5cceBHShWYLqX0cd8zAY9/mdtf3qfWkxqisSNO/WJKoVJ0xx/CrDVgjvxn2fpZj1sESEZ1h6cZoR861CcDr4QJBAPkA+qZ0STUfb1PtcO4+65LIQDAAS2Wr0WesRr3p8ccqPPMRuTonWd+XzeESe+O51pBS+PEvlZpCE0CZ5V9hnoMCQQDl9ouJcTyqOZUQ5iOL38a63zDbyq+WnnydZtbtMgKkYJtAKeYPMGlF33onqUCEtcOIN59OqUt1Yy7A/y9oiVJJAkEAuTj/Oj6aDkgZ2gZv0OlA9ui6xnoRm8mZdVLzNGYHka1btTvj2txWwDn9zYSgX59neegegdpxoFOyWoWf17mX3QJACq127yvN2E2SKVW2QtFiJd0lJJ91pbW4LYrP4fWXf9BohQMtBnmF+dOVlW/bag4ShSmoAPwFX+76BcYTinQN2QJBAJQAUCdsYxIMuu/Hzixde8JQGDmMIjBulifgwQ9nXwH6AhPp+0Gs449WPJ9Brga4KJZABjGuwmSjrRl+QwKPn/o=',

        /*
         * Key rollover
         * If you plan to update the SP x509cert and privateKey
         * you can define here the new x509cert and it will be 
         * published on the SP metadata so Identity Providers can
         * read them and get ready for rollover.
         */
        // 'x509certNew' => '',
    ),

    // Identity Provider Data that we want connect with our SP
    'idp' => array (
        // Identifier of the IdP entity  (must be a URI)
        'entityId' => 'https://app.onelogin.com/saml/metadata/f4a437d9-8a0c-415c-879b-c51b5d2c11fd',
        // SSO endpoint info of the IdP. (Authentication Request protocol)
        'singleSignOnService' => array (
            // URL Target of the IdP where the SP will send the Authentication Request Message
            'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-post/sso/f4a437d9-8a0c-415c-879b-c51b5d2c11fd',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // SLO endpoint info of the IdP.
        'singleLogoutService' => array (
            // URL Location of the IdP where the SP will send the SLO Request
            'url' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-redirect/slo/1425707',
            // URL location of the IdP where the SP will send the SLO Response (ResponseLocation)
            // if not set, url for the SLO Request will be used
            'responseUrl' => 'https://palladiumhub-dev.onelogin.com/trust/saml2/http-redirect/slo/1425707',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // Public x509 certificate of the IdP
        'x509cert' => 'MIID6zCCAtOgAwIBAgIUSTtiK1AHONFm9NlJ44ppLBi4TyAwDQYJKoZIhvcNAQEFBQAwSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMB4XDTIxMDQxOTEwMzkwOFoXDTI2MDQxOTEwMzkwOFowSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAuWTWyc1oY9qC+3JgMECCLuuVTXJszYyXplVRsWhmpdZnMRQHyyCKCHG3sPnm3RJ3hcUOaDXP2UrJZHCF01wPcw5wAI6CDHojibYswNbrjTeNJ8Z8N77FMLFUHFk4/aCTstGqd3eLyIHBmCm9JkNgwTU5yNPF3/gZeN4+ixruEO08LeeVgRUfNp+f9ZZFgM9tRryqhyCRbVoPsc8DUKIPEVi6hw6gXeiQtZK342ngXJRg7c8/igErqrb3VfPdBy2GV29jjfEqgfrD+2Ck7s8tsIM2rmFefWLfNlKjWPdFXbbIEmNL7jttxXMsguT5sIEC2oUCXZFyr+IIRZ87ItpNSwIDAQABo4HIMIHFMAwGA1UdEwEB/wQCMAAwHQYDVR0OBBYEFIWox5fAcUdHyHBzveSnO9V1pQciMIGFBgNVHSMEfjB8gBSFqMeXwHFHR8hwc73kpzvVdaUHIqFOpEwwSjEVMBMGA1UECgwMcGFsbGFkaXVtaHViMRUwEwYDVQQLDAxPbmVMb2dpbiBJZFAxGjAYBgNVBAMMEU9uZUxvZ2luIEFjY291bnQgghRJO2IrUAc40Wb02UnjimksGLhPIDAOBgNVHQ8BAf8EBAMCB4AwDQYJKoZIhvcNAQEFBQADggEBAEHhRaJvPTepEBZBaZxNa2cExolQ52KSuVJmw1F2FH9HiawayE0BGGworcGOOipPHgUHom1RhJ4+mlZhpmCzSUA5ghJNVfh4lVaA+Hxxl0QT8UDSM3SWjk8uPle5zJM1DEsLAjBlf48WQ4HyB1utM5gDod3hAzN4tjKNnFzBcTlW8Dc9WiAviAY24VckauuGw0VW9mDVGAPDAjpuV4kE+nLvgTL1VmsBWuwQSf26w7JMgbpzQn2L4Au8Gxzp8/W51qzyEarA/WvjFOsBnaNEdQPIgLrFEgcdFBIZURyU6x90CTcENGnpMNs0xMFM9ZpSfFfIDBLTosxZNCqjW/hK3/U=',
        /*
         *  Instead of use the whole x509cert you can use a fingerprint in
         *  order to validate the SAMLResponse, but we don't recommend to use
         *  that method on production since is exploitable by a collision
         *  attack.
         *  (openssl x509 -noout -fingerprint -in "idp.crt" to generate it,
         *   or add for example the -sha256 , -sha384 or -sha512 parameter)
         *
         *  If a fingerprint is provided, then the certFingerprintAlgorithm is required in order to
         *  let the toolkit know which Algorithm was used. Possible values: sha1, sha256, sha384 or sha512
         *  'sha1' is the default value.
         */
        // 'certFingerprint' => '',
        // 'certFingerprintAlgorithm' => 'sha1',

        /* In some scenarios the IdP uses different certificates for
         * signing/encryption, or is under key rollover phase and more 
         * than one certificate is published on IdP metadata.
         * In order to handle that the toolkit offers that parameter.
         * (when used, 'x509cert' and 'certFingerprint' values are
         * ignored).
         */
        // 'x509certMulti' => array(
        //      'signing' => array(
        //          0 => '<cert1-string>',
        //      ),
        //      'encryption' => array(
        //          0 => '<cert2-string>',
        //      )
        // ),
    ),
);
