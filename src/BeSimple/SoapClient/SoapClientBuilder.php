<?php

/*
 * This file is part of the BeSimpleSoapBundle.
 *
 * (c) Christian Kerl <christian-kerl@web.de>
 * (c) Francis Besset <francis.besset@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace BeSimple\SoapClient;

use BeSimple\SoapCommon\SoapOptions\SoapOptions;

/**
 * Provides a SoapClient instance.
 *
 * @author Francis Besset <francis.besset@gmail.com>
 * @author Christian Kerl <christian-kerl@web.de>
 * @author Petr Bechyně <petr.bechyne@vodafone.com>
 */
class SoapClientBuilder
{
    public function build(SoapClientOptions $soapClientOptions, SoapOptions $soapOptions)
    {
        return new SoapClient(
            $soapClientOptions,
            $soapOptions
        );
    }
}
