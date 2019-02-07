<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use ValenceWrapper\Model\Basic\RichText;
use ValenceWrapper\Model\Basic\RichTextInput;
use ValenceWrapper\Model\Basic\UtcDateTime;
use ValenceWrapper\Model\Assessment\Rubric;
use ValenceWrapper\Model\Assessment\RubricAssessment;

class AssessmentModelTest extends TestCase {

    /** @test */
    public function testRubric() {

        $rubricArray = json_decode(
                '[{"RubricId":72598,"Name":"ZZZ101 Assignment Marking Rubric: A1.2 10%","Description":{"Text":"Text","Html":"<p>Text</p>"},"RubricType":1,"ScoringMethod":3,"CriteriaGroups":[{"Name":"PERFORMANCE INDICATORS","Levels":[{"Id":797087,"Name":"No/poor attempt","Points":null},{"Id":797086,"Name":"Needs improvement","Points":null},{"Id":797085,"Name":"Satisfactory","Points":null},{"Id":797084,"Name":"Good","Points":null},{"Id":797083,"Name":"Very Good","Points":null},{"Id":797082,"Name":"Excellent","Points":null}],"Criteria":[{"Id":386780,"Name":"Use of academic theory and concepts to define and discuss the ‘characteristics of organisations’ and analysis of these characteristics in your organisation in 2017/8.  ULO1 & 3 – GLO4   (Max 4 marks)","Cells":[{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are not applied to the organisation chosen. The context has not been provided or is very unclear.\r\n \r\nParaphrases or summarises information rather than providing an analysis. Does not identify components of the theory, and does not distinguish the relevant from irrelevant details in relation to the chosen organisation. \r\n(0-1.1 marks)","Html":"<p>The fundamental theories relevant to this task are not applied to the organisation chosen. The context has not been provided or is very unclear.</p>\r\n<p>&#160;</p>\r\n<p>Paraphrases or summarises information rather than providing an analysis. Does not identify components of the theory, and does not distinguish the relevant from irrelevant details in relation to the chosen organisation.&#160;</p>\r\n<p>(0-1.1 marks)</p>"},"Points":0.600000000,"LevelId":797087},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are slightly unclear or an appropriate academic source (text or academic journal article) has not been cited. Some context is provided but is unclear.\r\n \r\nParaphrases or summarises information with very little analysis. Inconsistently identifies components of the theories and incorrectly distinguishes relevant from irrelevant details in relation to the chosen organisation.\r\n(1.2-1.9 marks)","Html":"<p>The fundamental theories relevant to this task are slightly unclear or an appropriate academic source (text or academic journal article) has not been cited. Some context is provided but is unclear.</p>\r\n<p>&#160;</p>\r\n<p>Paraphrases or summarises information with very little analysis. Inconsistently identifies components of the theories and incorrectly distinguishes relevant from irrelevant details in relation to the chosen organisation.</p>\r\n<p>(1.2-1.9 marks)</p>"},"Points":1.600000000,"LevelId":797086},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are provided without ambiguity and refers to a text or journal academic article, but these are not well discussed. Some context provided.\r\n \r\nDemonstrates the ability to analyse information at a rudimentary level. Identifies components of the theories; mostly distinguishing relevant from irrelevant details in relation to the chosen organisation.\r\n (2-2.3 marks)","Html":"<p>The fundamental theories relevant to this task are provided without ambiguity and refers to a text or journal academic article, but these are not well discussed. Some context provided.</p>\r\n<p>&#160;</p>\r\n<p>Demonstrates the ability to analyse information at a rudimentary level. Identifies components of the theories; mostly distinguishing relevant from irrelevant details in relation to the chosen organisation.</p>\r\n<p>&#160;(2-2.3 marks)</p>"},"Points":2.200000000,"LevelId":797085},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are clearly described and explained, without ambiguity and in context and with reference to the text and a suitable academic journal article.\r\n \r\nA good analysis of information, clearly identifying the key components of the theories and accurately distinguishes relevant from irrelevant details in relation to the chosen organisation.\r\n(2.4-2.7 marks)","Html":"<p>The fundamental theories relevant to this task are clearly described and explained, without ambiguity and in context and with reference to the text and a suitable academic journal article.</p>\r\n<p>&#160;</p>\r\n<p>A good analysis of information, clearly identifying the key components of the theories and accurately distinguishes relevant from irrelevant details in relation to the chosen organisation.</p>\r\n<p>(2.4-2.7 marks)</p>"},"Points":2.600000000,"LevelId":797084},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are clearly identified and described well, with relevant information and argument where necessary for understanding. The context is clear and suitable text sources and academic journal article(s) are used.\r\n \r\nA robust analysis of information, consistently identifying the key components of the theories and accurately distinguishes relevant from irrelevant details in relation to the chosen organisation.\r\n(2.8-3.1 marks)","Html":"<p>The fundamental theories relevant to this task are clearly identified and described well, with relevant information and argument where necessary for understanding. The context is clear and suitable text sources and academic journal article(s) are used.</p>\r\n<p>&#160;</p>\r\n<p>A robust analysis of information, consistently identifying the key components of the theories and accurately distinguishes relevant from irrelevant details in relation to the chosen organisation.</p>\r\n<p>(2.8-3.1 marks)</p>"},"Points":3.000000000,"LevelId":797083},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"The fundamental theories relevant to this task are clearly identified and described comprehensively, delivering all relevant information necessary for full understanding. The context and background are well explained and suitable text sources and academic journal article(s) are used.\r\nA thorough analysis with some critical evaluation of information, identifying the key components of the theories and accurately and thoroughly distinguishes relevant from irrelevant details in relation to the chosen organisation.\r\n(3.2-4 marks)\r\n","Html":"<p>The fundamental theories relevant to this task are clearly identified and described comprehensively, delivering all relevant information necessary for full understanding. The context and background are well explained and suitable text sources and academic journal article(s) are used.</p>\r\n<p>A thorough analysis with some critical evaluation of information, identifying the key components of the theories and accurately and thoroughly distinguishes relevant from irrelevant details in relation to the chosen organisation.</p>\r\n<p>(3.2-4 marks)</p>\r\n<p></p>"},"Points":4.000000000,"LevelId":797082}]},{"Id":386781,"Name":"Cites text and suitable academic journal article. ULO2 – GLO2 (Max 1 mark)","Cells":[{"Feedback":{"Text":"","Html":""},"Description":{"Text":"No text and no suitable academic journal article.\r\n \r\n(0-0.2 marks)","Html":"<p>No text and no suitable academic journal article.</p>\r\n<p><b>&#160;</b></p>\r\n<p>(0-0.2 marks)</p>"},"Points":0.100000000,"LevelId":797087},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"One of either but not both text and suitable academic journal article.\r\n(0.3-0.4 marks)","Html":"<p>One of either but not both text and suitable academic journal article.</p>\r\n<p>(0.3-0.4 marks)</p>"},"Points":0.400000000,"LevelId":797086},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both text and academic journal article.\r\n \r\n(0.5-0.5 marks)","Html":"<p>Both text and academic journal article.</p>\r\n<p>&#160;</p>\r\n<p>(0.5-0.5 marks)</p>"},"Points":0.500000000,"LevelId":797085},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both text and relevant academic journal article.\r\n \r\n(0.6-0.6 marks)","Html":"<p>Both text and relevant academic journal article.</p>\r\n<p><b>&#160;</b></p>\r\n<p>(0.6-0.6 marks)</p>"},"Points":0.600000000,"LevelId":797084},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both text and highly relevant management academic journal article.\r\n(0.7-0.7 marks","Html":"<p>Both text and highly relevant management academic journal article.</p>\r\n<p>(0.7-0.7 marks</p>"},"Points":0.700000000,"LevelId":797083},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both text and highly relevant well applied management academic journal article(s).\r\n(0.8-1 marks)","Html":"<p>Both text and highly relevant well applied management academic journal article(s).</p>\r\n<p>(0.8-1 marks)</p>"},"Points":1.000000000,"LevelId":797082}]},{"Id":386782,"Name":"Direct and indirect quotations using Deakin Harvard referencing style ULO2 – GLO2  (Max 1 mark)","Cells":[{"Feedback":{"Text":"","Html":""},"Description":{"Text":"No quotations included and/or most entries not compliant with Harvard referencing guidelines. \r\n(0-0.2 marks)","Html":"<p>No quotations included and/or most entries not compliant with Harvard referencing guidelines.<b>&#160;</b></p>\r\n<p>(0-0.2 marks)</p>"},"Points":0.100000000,"LevelId":797087},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"One of either but not both direct and indirect quotations included and/or are not compliant with Harvard referencing guidelines.\r\n(0.3-0.4 marks)","Html":"<p>One of either but not both direct and indirect quotations included and/or are not compliant with Harvard referencing guidelines.</p>\r\n<p>(0.3-0.4 marks)</p>"},"Points":0.400000000,"LevelId":797086},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both direct and indirect quotations included and are partially compliant with Harvard referencing guidelines.\r\n(0.5-0.5 marks)","Html":"<p>Both direct and indirect quotations included and are partially compliant with Harvard referencing guidelines.</p>\r\n<p>(0.5-0.5 marks)</p>"},"Points":0.500000000,"LevelId":797085},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both direct and indirect quotations included and are mostly compliant with most Harvard referencing guidelines.\r\n(0.6-0.6 marks)","Html":"<p>Both direct and indirect quotations included and are mostly compliant with most Harvard referencing guidelines.</p>\r\n<p>(0.6-0.6 marks)</p>"},"Points":0.600000000,"LevelId":797084},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both direct and indirect quotations included and are very compliant with Harvard referencing guidelines. \r\n(0.7-0.7 marks)","Html":"<p>Both direct and indirect quotations included and are very compliant with Harvard referencing guidelines.&#160;</p>\r\n<p>(0.7-0.7 marks)</p>"},"Points":0.700000000,"LevelId":797083},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Both direct and indirect quotations included and in-text citations are completely error free. \r\n(0.8-1 marks)","Html":"<p>Both direct and indirect quotations included and in-text citations are completely error free.<b>&#160;</b></p>\r\n<p>(0.8-1 marks)</p>"},"Points":1.000000000,"LevelId":797082}]},{"Id":386783,"Name":"Report Table of Contents (TOC) is relevant to the set A1.3 tasks for examining required organisation. ULO2 – GLO2 (Max 1 mark)","Cells":[{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Poor attempt at developing a Table of Contents, incorrect order of sections or majority of sections are not included. \r\n(0-0.2 marks)","Html":"<p>Poor attempt at developing a Table of Contents, incorrect order of sections or majority of sections are not included.&#160;</p>\r\n<p>(0-0.2 marks)</p>"},"Points":0.100000000,"LevelId":797087},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Does not follow the required TOC structure, with some sections not included or in the wrong order. \r\n(0.3-0.4 marks)","Html":"<p>Does not follow the required TOC structure, with some sections not included or in the wrong order.&#160;</p>\r\n<p>(0.3-0.4 marks)</p>"},"Points":0.400000000,"LevelId":797086},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"An attempt is made to follow the required TOC structure. Most sections are included but some inconsistencies exist in the layout.(0.5-0.5 marks)","Html":"<p>An attempt is made to follow the required TOC structure. Most sections are included but some inconsistencies exist in the layout.(0.5-0.5 marks)</p>"},"Points":0.500000000,"LevelId":797085},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"A good attempt is made to follow the required TOC structure. Most sections are included and layout is consistent within the table.(0.6-0.6 marks)","Html":"<p>A good attempt is made to follow the required TOC structure. Most sections are included and layout is consistent within the table.(0.6-0.6 marks)</p>"},"Points":0.600000000,"LevelId":797084},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"A very good attempt is made to follow the required TOC structure. All sections are included and layout is consistent within the table.\r\n(0.7-0.7 marks)","Html":"<p>A very good attempt is made to follow the required TOC structure. All sections are included and layout is consistent within the table.</p>\r\n<p>(0.7-0.7 marks)</p>"},"Points":0.700000000,"LevelId":797083},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Excellent use of the TOC structure/format. All sections are in included and layout is clear and consistent within the table. \r\n(0.8-1 marks)","Html":"<p>Excellent use of the TOC structure/format. All sections are in included and layout is clear and consistent within the table.&#160;</p>\r\n<p>(0.8-1 marks)</p>"},"Points":1.000000000,"LevelId":797082}]},{"Id":386784,"Name":"Reference lists of sources suitable to use in this task and planned for the Business Report using Deakin Harvard referencing style  ULO1 – GLO1, ULO2 – GLO2 (Max 3 marks)","Cells":[{"Feedback":{"Text":"","Html":""},"Description":{"Text":"No academic journal articles relating to the tasks and/or reference lists not included or most entries not compliant with most Harvard referencing guidelines. \r\n(0-0.8 marks)","Html":"<p>No academic journal articles relating to the tasks and/or reference lists not included or most entries not compliant with most Harvard referencing guidelines.<b>&#160;</b></p>\r\n<p>(0-0.8 marks)</p>"},"Points":0.400000000,"LevelId":797087},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Fewer than three academic journal articles relate well to the tasks and/or reference lists not compliant with many of the Harvard referencing guidelines.\r\n(0.9-1.4 marks)","Html":"<p>Fewer than three academic journal articles relate well to the tasks and/or reference lists not compliant with many of the Harvard referencing guidelines.</p>\r\n<p>(0.9-1.4 marks)</p>"},"Points":1.200000000,"LevelId":797086},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Fewer than four journal articles relate satisfactorily to the task and reference lists mostly complies with Harvard guidelines. Suitable organisational source and text included. \r\n(1.5-1.7 marks)","Html":"<p>Fewer than four journal articles relate satisfactorily to the task and reference lists mostly complies with Harvard guidelines. Suitable organisational source and text included.<b>&#160;</b></p>\r\n<p>(1.5-1.7 marks)</p>"},"Points":1.600000000,"LevelId":797085},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"At least four journal articles relate well to the task and reference lists compliant with mainly the Harvard guidelines. Suitable organisational source and text included. \r\n(1.8-2 marks)","Html":"<p>At least four journal articles relate well to the task and reference lists compliant with mainly the Harvard guidelines. Suitable organisational source and text included.&#160;</p>\r\n<p>(1.8-2 marks)</p>"},"Points":1.900000000,"LevelId":797084},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Five or more journal articles relate well to the task and reference lists compliant with Harvard guidelines. Suitable organisational source and text included. \r\n(2.1-2.3 marks)","Html":"<p>Five or more journal articles relate well to the task and reference lists compliant with Harvard guidelines. Suitable organisational source and text included.&#160;</p>\r\n<p>(2.1-2.3 marks)</p>"},"Points":2.200000000,"LevelId":797083},{"Feedback":{"Text":"","Html":""},"Description":{"Text":"Five or more exceptionally well- selected journal articles in relation to the task and reference lists completely error free. Excellent organisational source and text included.\r\n (2.4-3 marks)","Html":"<p>Five or more exceptionally well- selected journal articles in relation to the task and reference lists completely error free. Excellent organisational source and text included.</p>\r\n<p>&#160;(2.4-3 marks)</p>"},"Points":3.000000000,"LevelId":797082}]}]}],"OverallLevels":[{"Id":797088,"Name":"Fail (N)","RangeStart":0.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}},{"Id":797089,"Name":"Fail (N)","RangeStart":3.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}},{"Id":797090,"Name":"Pass (P)","RangeStart":5.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}},{"Id":797091,"Name":"Credit (C)","RangeStart":6.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}},{"Id":797092,"Name":"Distinction (D)","RangeStart":7.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}},{"Id":797093,"Name":"High Distinction (HD)","RangeStart":8.000000000,"Description":{"Text":"","Html":""},"Feedback":{"Text":"","Html":""}}]}]'
                , true);
        $rubric = new Rubric($rubricArray[0]);



        $this->assertInstanceOf(Rubric::class, $rubric);
    }

    /** @test */
    public function testRubricAssessment() {

        $json = '{
    "RubricAssessments": [
        {
            "RubricId": 65836,
            "OverallScore": 62.000000000,
            "OverallFeedback": {
                "Text": "",
                "Html": ""
            },
            "OverallLevel": {
                "LevelId": 722809,
                "Feedback": {
                    "Text": "",
                    "Html": ""
                }
            },
            "OverallScoreOverridden": false,
            "OverallFeedbackOverridden": false,
            "CriteriaOutcome": [
                {
                    "CriterionId": 349583,
                    "LevelId": 722802,
                    "Score": 12.000000000,
                    "ScoreIsOverridden": true,
                    "Feedback": {
                        "Text": "",
                        "Html": ""
                    },
                    "FeedbackIsOverridden": false
                },
                {
                    "CriterionId": 349584,
                    "LevelId": 722803,
                    "Score": 14.000000000,
                    "ScoreIsOverridden": true,
                    "Feedback": {
                        "Text": "",
                        "Html": ""
                    },
                    "FeedbackIsOverridden": true
                },
                {
                    "CriterionId": 349585,
                    "LevelId": 722803,
                    "Score": 12.000000000,
                    "ScoreIsOverridden": true,
                    "Feedback": {
                        "Text": "",
                        "Html": ""
                    },
                    "FeedbackIsOverridden": true
                },
                {
                    "CriterionId": 349586,
                    "LevelId": 722804,
                    "Score": 15.000000000,
                    "ScoreIsOverridden": false,
                    "Feedback": {
                        "Text": "",
                        "Html": ""
                    },
                    "FeedbackIsOverridden": false
                },
                {
                    "CriterionId": 349587,
                    "LevelId": 722804,
                    "Score": 9.000000000,
                    "ScoreIsOverridden": true,
                    "Feedback": {
                        "Text": "",
                        "Html": ""
                    },
                    "FeedbackIsOverridden": true
                }
            ]
        }
    ]
}';

        $rubricAssessmentArray = \GuzzleHttp\json_decode($json, true);
        $rubricAssessment = new RubricAssessment($rubricAssessmentArray);

        $this->assertInstanceOf(RubricAssessment::class, $rubricAssessment);
    }

}
