<?php

namespace Symfony\Contracts\HttpClient
{
    interface HttpClientInterface
    {
        public const OPTIONS_DEFAULTS = [
            'auth_basic' => null,   // array|string - an array containing the username as first value, and optionally the
                                    //   password as the second one; or string like username:password - enabling HTTP Basic
                                    //   authentication (RFC 7617)
            'auth_bearer' => null,  // string - a token enabling HTTP Bearer authorization (RFC 6750)
            'query' => [],          // string[] - associative array of query string values to merge with the request's URL
            'headers' => [],        // iterable|string[]|string[][] - headers names provided as keys or as part of values
            'body' => '',           // array|string|resource|\Traversable|\Closure - the callback SHOULD yield a string
                                    //   smaller than the amount requested as argument; the empty string signals EOF; if
                                    //   an array is passed, it is meant as a form payload of field names and values
            'json' => null,

        ];
        public function request(string $method, string $url, array $options = []): ResponseInterface;
        public function withOptions(array $options): static;
    }
}
