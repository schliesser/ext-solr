<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace ApacheSolrForTypo3\Solr\IndexQueue\Exception;

use ApacheSolrForTypo3\Solr\Exception;

/**
 * Exception that is thrown on indexing process. Does not matter on which side, TYPO3 or Apache.
 * This exception should be used for any errors on indexing process.
 */
class IndexingException extends Exception
{
}
