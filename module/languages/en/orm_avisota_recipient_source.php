<?php

/**
 * Avisota newsletter and mailing system
 * Copyright © 2016 Sven Baumann
 *
 * PHP version 5
 *
 * @copyright  way.vision 2016
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @package    avisota/contao-subscription-recipient
 * @license    LGPL-3.0+
 * @filesource
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['type']         = array(
	'Recipient source module',
	'Please choose the module that provide recipient data.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['title']        = array(
	'Name',
	'Please enter a name for this recipient source.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['filter']       = array(
	'Enable filters',
	'Enable filters on this recipient source. The available filters depend on the specific module.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['filterByMailingLists'] = array(
	'Filter by mailing list subscription',
	'Enable filter by mailing list subscriptions.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['mailingLists'] = array(
	'Mailing lists',
	'Please choose the selected mailing lists.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['disable']      = array(
	'Disabled',
	'Temporary disable this recipient source for transport.'
);
// members
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberBy']                              = array(
	'Select members&hellip;',
	'Please choose how members are selected.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberMailingLists']                    = array(
	'Mailing lists',
	'Please choose the selected mailing lists.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberAllowSingleMailingListSelection'] = array(
	'Allow single select mailing lists',
	'Allow the writer to single select mailing lists from this recipient source.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberGroups']                          = array(
	'Groups',
	'Please choose the selected groups.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberAllowSingleGroupSelection']       = array(
	'Allow single select groups',
	'Allow the writer to single select groups from this recipient source.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberAllowSingleSelection']            = array(
	'Allow single select members',
	'Allow the writer to single select members from this recipient source.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberFilterByColumns']                 = array(
	'Column filter',
	'Filter the recipients by columns.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberFilterByColumnsField']            = array('Column');
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberFilterByColumnsComparator']       = array('Comparator');
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberFilterByColumnsValue']            = array('Value');
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberFilterByColumnsNoEscape']         = array(
	'SQL',
	'Use value as native SQL (&rarr; the value will not excaped).'
);
// union
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['unionRecipientSources'] = array(
	'Recipient source',
	'Please choose the recipient sources to unify.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['unionClean']            = array(
	'Clean mode',
	'In clean mode duplicate entries will be filtered out. This mode need much more cpu speed and memory and may be slow on big recipient lists!'
);
// csv file
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFileSrc']                = array(
	'CSV file',
	'Please choose the CSV file.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvColumnAssignment']       = array(
	'Assign columns',
	'Please assign the columns to internal fields.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvColumnAssignmentColumn'] = array('Column');
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvColumnAssignmentField']  = array(
	'Field',
	'Please type in the assigned field name. E.g. <code>forename</code> or <code>surname</code>. There must be one column <code>email</code> at least!'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFileDelimiter'] = array(
	'Delimiter',
	'Please choose the CSV delimiter.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFileDelimiters'] = array(
	'comma'     => 'Comma',
	'separator' => 'Separator',
	'space'     => 'Space',
	'tabulator' => 'Tabulator',
	'linebreak' => 'Line break',
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFileEnclosure'] = array(
	'Enclosure',
	'Please choose the CSV enclosure.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFileEnclosures'] = array(
	'double' => 'Double quote',
	'single' => 'Single quote',
);
// dummy source
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['dummyMinCount'] = array(
	'Min count',
	'Please type in the minimum count of generated recipients.'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['dummyMaxCount'] = array(
	'Max count',
	'Please type in the maximum count of generated recipients.'
);


/**
 * Legends
 */
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['source_legend']     = 'Recipient source';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['filter_legend']     = 'Filter settings';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['expert_legend']     = 'Experts settings';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integrated_legend'] = 'Avisota integrated recipients';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['member_legend']     = 'Contao members';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['union_legend']      = 'Union';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csvFile_legend']    = 'CSV file';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['dummy_legend']      = 'Generator settings';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['details_legend']    = 'Details settings';


/**
 * Reference
 */
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integrated']                 = array(
	'Avisota integrated recipients'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integrated_by_mailing_list'] = array(
	'Avisota integrated recipients selected by mailing list'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['member']                     = array(
	'Contao members'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['union']                      = array(
	'Union'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['csv_file']                   = array(
	'CSV file'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['dummy']                      = array(
	'Random generator (for testing only!)',
	'Randomly generate recipients from a predefined set of forenames, surnames and domains. This recipient source is useful for testing. Please keep in mind that all emails are just generated. They should not exists, but there is no guarantee! This recipient source should only used in combination with a dummy transport or with the developer mode.'
);

$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integrated_details']        = 'Avisota integrated recipients';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['member_details']            = 'Contao members';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integrated_member_details'] = 'Avisota integrated recipients and Contao members';

$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integratedByMailingLists']    = 'by selected mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integratedByAllMailingLists'] = 'by all mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integratedByRecipients']      = 'by recipients from selected mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['integratedByAllRecipients']   = 'by all recipients';

$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByMailingLists']       = 'by selected mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByAllMailingLists']    = 'by all mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByGroups']             = 'by selected groups';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByAllGroups']          = 'by all groups';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByMailingListMembers'] = 'by members from selected mailing lists';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByGroupMembers']       = 'by members from selected groups';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['memberByAllMembers']         = 'by all members';

$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['duplicated_column']    = 'Columns and fields cannot used twice!';
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['missing_email_column'] = 'You need to assign <code>email</code> to one column!';


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['new']    = array(
	'New recipient source',
	'Add a new recipient source'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['show']   = array(
	'Recipient source details',
	'Show the details of recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['list']   = array(
	'List the recipients',
	'List the recipients from recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['toggle'] = array(
	'Toggle disabled status',
	'Toggle the disabled status of recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['delete'] = array(
	'Delete recipient source',
	'Delete recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['edit']   = array(
	'Edit recipient source',
	'Edit recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['up']     = array(
	'Increase priority',
	'Increase priority of recipient source ID %s'
);
$GLOBALS['TL_LANG']['orm_avisota_recipient_source']['down']   = array(
	'Decrease priority',
	'Decrease priority of recipient source ID %s'
);
