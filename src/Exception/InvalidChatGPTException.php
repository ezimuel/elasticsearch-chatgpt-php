<?php
/**
 * Elasticsearch ChatGPT PHP
 *
 * @link      https://github.com/elastic/elasticsearch-chatgpt-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   https://opensource.org/licenses/MIT MIT License
 *
 * Licensed to Elasticsearch B.V under one or more agreements.
 * Elasticsearch B.V licenses this file to you under the MIT License.
 * See the LICENSE file in the project root for more information.
 */
declare(strict_types=1);

namespace Elastic\Elasticsearch\ChatGPT\Exception;

use Exception;

class InvalidChatGPTException extends Exception implements ChatGPTException
{

}