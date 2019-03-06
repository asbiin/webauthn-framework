<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Webauthn;

interface PublicKeyCredentialSourceRepository extends CredentialRepository
{
    public function find(string $publicKeyCredentialId): ?PublicKeyCredentialSource;

    public function save(PublicKeyCredentialSource $publicKeyCredentialSource): void;
}
