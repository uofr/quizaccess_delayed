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
 * Strings for the quizaccess_delayed plugin.
 * Based on quizaccess_activateattempt https://github.com/IITBombayWeb/moodle-quizaccess_delayed/tree/v1.0.3
 *
 * @package   quizaccess_delayed
 * @author    Juan Pablo de Castro <juan.pablo.de.castro@gmail.com>
 * @copyright 2020 Juan Pablo de Castro @University of Valladolid, Spain
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */


defined('MOODLE_INTERNAL') || die();

$string['attemptquiz'] = 'Attempt quiz now';
$string['quizwillstartinabout'] = 'Your turn for this quiz will start in about';
$string['quizwillstartinless'] = 'Your turn for this quiz will start in less than a minute';
$string['quizaccess_delayed_enabled'] = 'Delayed attempt enabled';
$string['quizaccess_delayed_allowdisable'] = 'The teachers are allowed to disable the rule';
$string['quizaccess_delayed_enabledbydefault'] = 'New quizzes will use this rule by default';
$string['quizaccess_delayed_showdangerousquiznotice'] = 'Shows the teacher a warning if their quiz is resource intensive';
$string['quizaccess_delayed_dangerousquiznotice'] = 'Institutional message displayed if the quiz could be problematic';
$string['quizaccess_delayed_dangerousquiznotice_desc'] = 'This message will be displayed to teachers while setting up the quiz if the plugin determines that the parameters may be problematic. This is a good place to link manuals or instructions for designing less problematic quizzes.';
$string['quizaccess_delayed_startrate'] = 'Entry rate (students per minute)';
$string['quizaccess_delayed_maxdelay'] = 'Maximum delay (minutes)';
$string['quizaccess_delayed_timelimitpercent'] = 'Maximum delay as a percentage of completion time';
$string['quizaccess_delayed_notice'] = 'Notice to students';
$string['quizaccess_delayed_notice_desc'] = 'This text is shown to all students in addition to the text the teacher uses as a description of the activity. It is designed to display an institutional message, usually related to instructions on how to use the quizzes.';
$string['quizaccess_delayed_teachernotice'] = 'This quiz is configured to use a phased entry control, which will cause students to enter randomly, with up to a maximum of {$a} minutes of delay.';
$string['quizaccess_delayed_teachernotice2'] = 'Message for the Teacher: Your students will see the following message while waiting:';
$string['quizaccess_delayed_countertype'] ='Type of coundown to use.';
$string['pleasewait'] = 'Please wait here';
$string['noscriptwarning'] = 'This quiz requires a browser that supports JavaScript. If you have a Javascript blocker you will need to disable it.';
$string['pluginname_desc'] = 'Auto activate quiz attempt button with random delay access rule';
$string['pluginname'] = 'Entry to quiz attempt with random delay';
$string['delayedattemptlock'] = 'Gradual entry to the quiz';
$string['delayedattemptlock_help'] = 'When enabled, upon loading the quiz page prior to the quiz start date and time, the start attempt button is disabled.
A countdown period is started at the time of the quiz (randomly assigned, up to a time set up by your institution). When this countdown ends, the start attempt button is re-enabled and the student can then initiate the quiz attempt.';
$string['explaindelayedattempt'] = 'Sets a random access delay';
$string['tooshortpagesadvice'] = 'This quiz has {$a->pages} pages that may be too short and could increase the load on the server. Consider allowing more questions per page where possible, while keeping in mind that essay questions should be limited to one question per page.';
$string['tooshorttimeguardadvice'] = 'The open and close time for your quiz allows {$a->timespanstr}, while the time limit for your exam is set to {$a->timelimitstr}. Please note that some students will be delayed by up to {$a->maxdelaystr}. Consider adjusting the timing of your quiz to allow sufficient time for your students to complete their exam. It is recommended to leave a safety margin in case of unexpected delays that could occur at the start of the quiz.';
$string['flipdowncounter'] = 'Animated card counter';
$string['plaintextcounter'] = 'Plain text counter';