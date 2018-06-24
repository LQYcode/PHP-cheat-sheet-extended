<?php
/**
 * HTML content: About page.
 *
 * @package PHPCheatsheets
 */

// Prevent direct calls to this file.
if ( ! defined( 'APP_DIR' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}
?>

		<div class="about">
			<a href="https://www.flickr.com/photos/87233981@N00/2870136931"><img src="<?php echo BASE_URI; ?>page/images/juliette_by_chris.png" width="181" height="120" alt="Juliette Reinders Folmer, photo by Chris Shiflett" class="about-me" /></a>

			<h3>Who&#8217;s behind this ?</h3>
			<p>
				My name is Juliette Reinders Folmer. I&#8217;m a business consultant who just happens to have a knack for programming. I&#8217;m self-employed, operating under the name &#8220;<a href="https://adviesenzo.nl/">Advies en zo</a>&#8222; and am based in Amsterdam, The Netherlands.
			</p>
			<p>
				<a href="https://twitter.com/jrf_nl" class="twitter-follow-button" data-show-count="false" title="Follow Juliette on Twitter">Follow @jrf_nl</a>
				<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

				<a href="https://nl.linkedin.com/in/julietterf" target="_blank" class="li-button">
					<img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_liprofile_blue_80x15.png" width="80" height="15" alt="View Juliette Reinders Folmer&#8217;s profile on LinkedIn" />
				</a>
			</p>


			<h3>Why did you make this site ?</h3>
			<p>
				You know those really hard to debug irritating issues which can really drive you bonkers ?
			</p>
			<p>
				Yeah, so do I. And while trying to debug some of those, these cheat sheets were &#8216;born&#8217;. And I&#8217;ve been using them ever since.
			</p>



			<h3>Want to learn more or test your knowledge ?</h3>
			<p>
				Hire me ;-)
			</p>
			<p>
				Based on some of the gotcha&#8217;s I came across, I created <em>The Big &#8220;Why equal doesn&#8217;t equal&#8222; quiz</em>, a talk which I&#8217;ve presented at numerous PHP conferences and meetings.
			</p>
			<ul>
				<li>
					If you are a conference organizer and would like the add the quiz to your conference program, please contact me to make arrangements.
				</li>
				<li>
					If you work with PHP, manage a team of programmers or otherwise know people who could benefit from this knowledge, you can hire me to give an extended session at your company or organization.
				</li>
			</ul>



			<div class="important">
				<p>Found a mistake ? Want more tests ? or more cheatsheets ?</p>
				<p>Go ahead: open an <a href="https://github.com/jrfnl/PHP-cheat-sheet-extended/issues" title="Open an issue on GitHub">issue</a> or send in a <a href="https://github.com/jrfnl/PHP-cheat-sheet-extended" title="Send in a pull request on GitHub">pull request</a>.</p>
			</div>
		</div>

