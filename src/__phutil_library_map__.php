<?php

/**
 * This file is automatically generated. Use 'phutil_mapper.php' to rebuild it.
 * @generated
 */

phutil_register_library_map(array(
  'class' =>
  array(
    'ArcanistAmendWorkflow' => 'workflow/amend',
    'ArcanistApacheLicenseLinter' => 'lint/linter/apachelicense',
    'ArcanistApacheLicenseLinterTestCase' => 'lint/linter/apachelicense/__tests__',
    'ArcanistBaseUnitTestEngine' => 'unit/engine/base',
    'ArcanistBaseWorkflow' => 'workflow/base',
    'ArcanistBundle' => 'parser/bundle',
    'ArcanistCallConduitWorkflow' => 'workflow/call-conduit',
    'ArcanistChooseInvalidRevisionException' => 'exception',
    'ArcanistChooseNoRevisionsException' => 'exception',
    'ArcanistCommitWorkflow' => 'workflow/commit',
    'ArcanistConfiguration' => 'configuration',
    'ArcanistCoverWorkflow' => 'workflow/cover',
    'ArcanistDiffChange' => 'parser/diff/change',
    'ArcanistDiffChangeType' => 'parser/diff/changetype',
    'ArcanistDiffHunk' => 'parser/diff/hunk',
    'ArcanistDiffParser' => 'parser/diff',
    'ArcanistDiffParserTestCase' => 'parser/diff/__tests__',
    'ArcanistDiffUtils' => 'difference',
    'ArcanistDiffWorkflow' => 'workflow/diff',
    'ArcanistDifferentialCommitMessage' => 'differential/commitmessage',
    'ArcanistDifferentialCommitMessageParserException' => 'differential/commitmessage',
    'ArcanistDifferentialRevisionRef' => 'differential/revision',
    'ArcanistExportWorkflow' => 'workflow/export',
    'ArcanistFilenameLinter' => 'lint/linter/filename',
    'ArcanistGeneratedLinter' => 'lint/linter/generated',
    'ArcanistGitAPI' => 'repository/api/git',
    'ArcanistGitHookPreReceiveWorkflow' => 'workflow/git-hook-pre-receive',
    'ArcanistHelpWorkflow' => 'workflow/help',
    'ArcanistLiberateLintEngine' => 'lint/engine/liberate',
    'ArcanistLiberateWorkflow' => 'workflow/liberate',
    'ArcanistLicenseLinter' => 'lint/linter/license',
    'ArcanistLintEngine' => 'lint/engine/base',
    'ArcanistLintJSONRenderer' => 'lint/renderer',
    'ArcanistLintMessage' => 'lint/message',
    'ArcanistLintPatcher' => 'lint/patcher',
    'ArcanistLintRenderer' => 'lint/renderer',
    'ArcanistLintResult' => 'lint/result',
    'ArcanistLintSeverity' => 'lint/severity',
    'ArcanistLintSummaryRenderer' => 'lint/renderer',
    'ArcanistLintWorkflow' => 'workflow/lint',
    'ArcanistLinter' => 'lint/linter/base',
    'ArcanistLinterTestCase' => 'lint/linter/base/test',
    'ArcanistListWorkflow' => 'workflow/list',
    'ArcanistMarkCommittedWorkflow' => 'workflow/mark-committed',
    'ArcanistNoEffectException' => 'exception/usage/noeffect',
    'ArcanistNoEngineException' => 'exception/usage/noengine',
    'ArcanistNoLintLinter' => 'lint/linter/nolint',
    'ArcanistNoLintTestCaseMisnamed' => 'lint/linter/nolint/__tests__',
    'ArcanistPEP8Linter' => 'lint/linter/pep8',
    'ArcanistPatchWorkflow' => 'workflow/patch',
    'ArcanistPhutilModuleLinter' => 'lint/linter/phutilmodule',
    'ArcanistPhutilTestCase' => 'unit/engine/phutil/testcase',
    'ArcanistPhutilTestTerminatedException' => 'unit/engine/phutil/testcase/exception',
    'ArcanistPyFlakesLinter' => 'lint/linter/pyflakes',
    'ArcanistRepositoryAPI' => 'repository/api/base',
    'ArcanistShellCompleteWorkflow' => 'workflow/shell-complete',
    'ArcanistSubversionAPI' => 'repository/api/subversion',
    'ArcanistSvnHookPreCommitWorkflow' => 'workflow/svn-hook-pre-commit',
    'ArcanistTextLinter' => 'lint/linter/text',
    'ArcanistTextLinterTestCase' => 'lint/linter/text/__tests__',
    'ArcanistUnitTestResult' => 'unit/result',
    'ArcanistUnitWorkflow' => 'workflow/unit',
    'ArcanistUsageException' => 'exception/usage',
    'ArcanistUserAbortException' => 'exception/usage/userabort',
    'ArcanistWorkingCopyIdentity' => 'workingcopyidentity',
    'ArcanistXHPASTLinter' => 'lint/linter/xhpast',
    'ArcanistXHPASTLinterTestCase' => 'lint/linter/xhpast/__tests__',
    'PhutilLintEngine' => 'lint/engine/phutil',
    'PhutilModuleRequirements' => 'parser/phutilmodule',
    'PhutilUnitTestEngine' => 'unit/engine/phutil',
    'PhutilUnitTestEngineTestCase' => 'unit/engine/phutil/__tests__',
    'UnitTestableArcanistLintEngine' => 'lint/engine/test',
  ),
  'function' =>
  array(
  ),
  'requires_class' =>
  array(
    'ArcanistAmendWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistApacheLicenseLinter' => 'ArcanistLicenseLinter',
    'ArcanistApacheLicenseLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistCallConduitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCommitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistCoverWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistDiffParserTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistDiffWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistExportWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistFilenameLinter' => 'ArcanistLinter',
    'ArcanistGeneratedLinter' => 'ArcanistLinter',
    'ArcanistGitAPI' => 'ArcanistRepositoryAPI',
    'ArcanistGitHookPreReceiveWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistHelpWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLiberateLintEngine' => 'ArcanistLintEngine',
    'ArcanistLiberateWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLicenseLinter' => 'ArcanistLinter',
    'ArcanistLintWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistLinterTestCase' => 'ArcanistPhutilTestCase',
    'ArcanistListWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistMarkCommittedWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistNoEffectException' => 'ArcanistUsageException',
    'ArcanistNoEngineException' => 'ArcanistUsageException',
    'ArcanistNoLintLinter' => 'ArcanistLinter',
    'ArcanistNoLintTestCaseMisnamed' => 'ArcanistLinterTestCase',
    'ArcanistPEP8Linter' => 'ArcanistLinter',
    'ArcanistPatchWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistPhutilModuleLinter' => 'ArcanistLinter',
    'ArcanistPyFlakesLinter' => 'ArcanistLinter',
    'ArcanistShellCompleteWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistSubversionAPI' => 'ArcanistRepositoryAPI',
    'ArcanistSvnHookPreCommitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistTextLinter' => 'ArcanistLinter',
    'ArcanistTextLinterTestCase' => 'ArcanistLinterTestCase',
    'ArcanistUnitWorkflow' => 'ArcanistBaseWorkflow',
    'ArcanistUserAbortException' => 'ArcanistUsageException',
    'ArcanistXHPASTLinter' => 'ArcanistLinter',
    'ArcanistXHPASTLinterTestCase' => 'ArcanistLinterTestCase',
    'PhutilLintEngine' => 'ArcanistLintEngine',
    'PhutilUnitTestEngine' => 'ArcanistBaseUnitTestEngine',
    'PhutilUnitTestEngineTestCase' => 'ArcanistPhutilTestCase',
    'UnitTestableArcanistLintEngine' => 'ArcanistLintEngine',
  ),
  'requires_interface' =>
  array(
  ),
));
