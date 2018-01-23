<?php
/*
 * This file is part of foxverse
 * Copyright (C) 2017 Steven Lockhomes, Billy Humphreys
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * 
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */

$xml = new SimpleXMLElement("<result/>");

$xml->addChild("has_error", 0);
$xml->addChild("version", getenv("API_VERSION"));
$endpoint = $xml->addChild("endpoint");
$endpoint->addChild("host", $_SERVER["HTTP_HOST"]);
$endpoint->addChild("api_host", getenv("API_HOST"));
$endpoint->addChild("portal_host", getenv("PORTAL_HOST"));
$endpoint->addChild("n3ds_host", getenv("N3DS_HOST"));

header("Content-Type: text/xml");
print($xml->asXML());
