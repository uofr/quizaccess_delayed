<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information for the quizaccess_delayed plugin.
 *
 * Based on quizaccess_activateattempt https://github.com/IITBombayWeb/moodle-quizaccess_activateattempt/tree/v1.0.3
 *
 * @package   quizaccess_delayed
 * @author    Juan Pablo de Castro
 * @copyright 2020 University of Valladolid, Spain
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined ( 'MOODLE_INTERNAL' ) || die ();

$plugin->version = 2025031100;
$plugin->requires = 2017050500;
$plugin->component = 'quizaccess_delayed';
$plugin->maturity  = MATURITY_STABLE;
$plugin->release   = '1.2.8';