<!DOCTYPE html>
<html lang="en">
	<head>
		<title>GURPS Character Sheet - Release Notes</title>
		<?php include 'parts/head.php'; ?>
	</head>
	<body>
		<?php include 'parts/page_header.php'; ?>
		<div id="main">
			<?php include 'parts/menu.php'; ?>
			<div id="right_column">
				<div id="release_notes">
					<h1>Release Notes</h1>
					<h2>Version <span class="version">4.0.2</span><span class="release_date">January 4, 2015</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Updated localization: German.</li>
						<li>New localization: Russian.</li>
						<li>Added a preference to allow the use of the GURPS metric conversion rules from B9. This is primarily for display purposes at this point.
							While data entry has been allowed in varied units for quite some time now, it is still preferred that the data be entered to exactly
							match the rulebooks (i.e. imperial units, not metric) if you intend to share data files.</li>
						<li>Added a preference to allow the sheet to show total character points with or without the unspent points included.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fixed resolution of skill levels from defaults to match what Sean Punch (aka Kromm) stated was the
							intended resolution mechanism.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Removed TL from the Naturalist skill.</li>
						<li>Fixed the defaults for Mechanic.</li>
						<li>Additions to the data files from Horror, along with miscellaneous fixes in the existing Horror entries.</li>
						<li>Fixed Ultra Tech Reflec and Monocrys armor.</li>
						<li>Added additional varieties of suppressors from High Tech.</li>
						<li>Fixed an incorrect cost for the Vague modifier that existed in some advantages.</li>
						<li>Fixed a missing skill bonus for the Flexibility advantage.</li>
						<li>Added some missing equipment from the Basic Set.</li>
						<li>Fixed many misspellings in the data files.</li>
						<li>Added the mutual exclusion that Combat Reflexes and Enhanced Time Sense have.</li>
						<li>More complete version of Enhanced Time Sense.</li>
					</ul>
					<h2>Version <span class="version">4.0.1</span><span class="release_date">June 13, 2014</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Partially localized for German, courtesy of Sebi. More to come in future releases.</li>
						<li>Option/Alt-Right Arrow now expands the selected nodes and all of their children in the Library
							Explorer.</li>
						<li>Added a button for the removal of attacks in the editor panel.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fixed an issue that was causing odd behavior when a window other than the main GCS window
							was focused and then the main GCS window was re-focused.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/94">Bug #94</a>: Changed the prerequisites
							in some data files to require the specialization of "Submachine Gun" and not "SMG", since that's
							what the Guns skill uses.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Revised the version checking so that older versions can now notice versions 4.0+ being available.</li>
						<li>The height, weight and age fields no longer show anything when a zero is entered.</li>
						<li>The Modifiers list in the item editor now uses the standard platform fonts rather than the fonts
							set for the character sheet.</li>
						<li>Switched the abbreviation for Metric Tons to just 't' (from 'mt').</li>
						<li>Added 32-bit versions of GCS for Windows and Linux. (These were back-ported for 4.0 as well)</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added some monsters/animals from the Basic Set and Magic. Contributed by Peter Th&#246;nell.</li>
					</ul>
					<h2>Version <span class="version">4.0</span><span class="release_date">May 29, 2014</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Added native launchers for each platform and embedded an appropriate Java Runtime Environment
							so that GCS will always have the version it needs to run.</li>
						<li>Implemented a docking interface for all of the files. This replaces the old window-based
							file management.</li>
						<li>Replaced the Data menu with the Library Explorer.</li>
						<li>Switched back to a version numbering scheme more familiar to most people, i.e.
							&lt;major&gt;.&lt;minor&gt;.&lt;bugfix&gt;. This has the unfortunate side-effect of not
							allowing older versions to notice there is a new version available for this transition.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/80">Bug #80</a>: Issues with localized
							numbers not being saved and restored correctly when the system locale wasn&#039;t compatible
							with US settings.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/78">Bug #78</a>: Equipment prereq
							doesn&#039;t store weight values &gt;= 1000.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/79">Bug #79</a>: Optional
							multiplicative modifiers aren&#039;t calculated correctly.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Updated the code base to require Java 8.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>As part of the change to use a docking interface, split the library files (.glb) back out
							into their separate library parts: Advantages (.adq), Skills (.skl), Spells (.spl), and
							Equipment (.eqp). You can still load the old .glb files, but untitled library documents of
							the appropriate type will be created when you do so, allowing you to save them out
							individually.</li>
						<li>Added (anti)talents from Power Ups 3, including reaction bonuses and alternate benefits.
							Contributed by Kevin Michael Smith.</li>
						<li>Updated the Action library with the latest from Zachary Spector.</li>
					</ul>
					<h2>Version <span class="version">2011.01.02.1054</span><span class="release_date">January 2, 2011</span></h2>
					<h3>Features Added</h3>
					<ul>
						<li>Implemented support for measurement units other than the GURPS standard feet/inches and pounds.
							User-entered values (including those entered into equipment, for example) can be in any of the
							supported units. The program will not convert these values – it leaves them as entered. However,
							anywhere the program calculates values from these, a preference controls what unit is used for
							the end result. Because of the bias of the rules for imperial units, using metric isn&#039;t a
							clean proposition using this feature, but it is possible now. This covers:
							<ul>
								<li><a href="http://sourceforge.net/p/gcs-java/feature-requests/103">Feature #103</a>:
									Allow Height &amp; Weight in metric units.</li>
								<li><a href="http://sourceforge.net/p/gcs-java/feature-requests/95">Feature #95</a>:
									Support metric units.</li>
								<li><a href="http://sourceforge.net/p/gcs-java/feature-requests/82">Feature #82</a>:
									Display weight in tons.</li>
								<li><a href="http://sourceforge.net/p/gcs-java/feature-requests/63">Feature #63</a>:
									Add metric support for height field.</li>
							</ul>
						</li>
						<li>Implemented <a href="http://sourceforge.net/p/gcs-java/feature-requests/115">Feature #115</a>:
							Expanded the valid range for the size modifier.</li>
						<li>Implemented <a href="http://sourceforge.net/p/gcs-java/feature-requests/112">Feature #112</a>:
							Preference to turn off automatic naming.</li>
						<li>Added support for <a href="http://sourceforge.net/p/gcs-java/feature-requests/100">Feature #100</a>:
							Advantage containers show point subtotal. The &#039;Group&#039; container used to be treated
							specially for point display purposes. Removed this so they all now display a summary of
							points of their contained items.</li>
					</ul>
					<h3>Bugs Fixed</h3>
					<ul>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/11">Bug #11</a>: Relative skill levels do
							not reflect Talent. Changed the code to apply all skill bonuses to the relative skill level
							calculation. Since this effectively reduces the calculation to Skill Level - Stat (but without
							encumbrance), I don&#039;t see why RSL is even needed if this is indeed the way it is intended to
							be done. However, since 99% of the published examples do it this way and Kromm has weighed in
							that this is the way it is intended, I&#039;ve made the change, silly though it may be.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/70">Bug #70</a>: Error in zero point
							calculation.</li>
						<li>Put the modifier list in a scroll panel so that it will be usable even on small monitors.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/63">Bug #63</a>: Text obeys system
							colors; background doesn&#039;t. I now force the character sheet text and backgrounds to have
							the colors they were intended to have, regardless of the current system theme. This still
							leaves the interface a bit jarring in some places, but everything should now be readable if
							you muck with the standard system colors.</li>
						<li>Changed the Windows batch file for gcs to extract the path name so that launching didn&#039;t
							depend on being in the correct directory. Not sure this works for all versions of Windows.
							Feedback would be appreciated.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/73">Bug #73</a>: Points being
							mis-calculated with some combinations of modifiers. Applied a patch from Matt Fowles plus
							some additional fixes of my own.</li>
					</ul>
					<h3>Miscellaneous Changes</h3>
					<ul>
						<li>Updated the HTML template layout to use points rather than pixels and forced a width that
							will fit on both Letter and A4 paper.</li>
						<li>Revised the splash screen and about box code to allow the informational data to be rendered
							at runtime.</li>
						<li>Switched to using reflection to deal with the Mac-specific portions of the app to eliminate
							the dependency on AppleJavaExtensions.jar.</li>
					</ul>
					<h3>Data File Changes</h3>
					<ul>
						<li>Added libraries for Action, High Tech &amp; Ultra Tech contributed by Zachary Spector.</li>
						<li>Cleaned up some traits with variants.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/74">Bug #74</a>: Errors in the Dungeon
							Fantasy data file.</li>
						<li>Fix for <a href="http://sourceforge.net/p/gcs-java/bugs/71">Bug #71</a>: Hide spell prereq
							incorrect.</li>
						<li>Fix various typos.</li>
						<li>Fix many techniques that were marked as being Average when they should have been marked
							as being Hard.</li>
						<li>Lots of miscellaneous corrections contributed by many different people.</li>
					</ul>
					<p class="footnote">Release notes for earlier versions have been removed.</p>
				</div>
			</div>
		</div>
		<?php include 'parts/footer.php'; ?>
	</body>
</html>