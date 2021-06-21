<?php



defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->dirroot . '/mod/quiz/accessrule/proctoring/rule.php');


/**
 * Unit tests for the quizaccess_proctoring plugin.
 *
 * @copyright  2020 Brain Station 23
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class quizaccess_proctoring_testcase extends basic_testcase {

    /**
     * Test case to check the rule basics
     */
    public function test_proctoring_access_rule() {
        $quiz = new stdClass();
        $cm = new stdClass();
        $cm->id = 0;
        $quizobj = new quiz($quiz, $cm, null);
        $rule = new quizaccess_proctoring($quizobj, 0);
        $attempt = new stdClass();

        $this->assertFalse($rule->prevent_access());
        $this->assertFalse($rule->prevent_new_attempt(0, $attempt));
        $this->assertFalse($rule->is_finished(0, $attempt));
        $this->assertFalse($rule->end_time($attempt));
        $this->assertFalse($rule->time_left_display($attempt, 0));
        $this->assertFalse($rule->attempt_must_be_in_popup());
    }

    /**
     * Test case to check if the proper message is producing form the empty object validation method
     *
     * @throws coding_exception
     */
    public function test_validate_preflight_check() {
        $quiz = new stdClass();
        $cm = new stdClass();
        $cm->id = 0;
        $quizobj = new quiz($quiz, $cm, null);
        $rule = new quizaccess_proctoring($quizobj, 0);
        $data['proctoring'] = '';
        $errors = $rule->validate_preflight_check($data, [], [], 0);
        $string = get_string('youmustagree', 'quizaccess_proctoring');

        $this->assertEquals($errors['proctoring'], $string);
    }
}
