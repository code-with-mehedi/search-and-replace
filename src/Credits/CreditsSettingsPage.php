<?php

namespace Inpsyde\SearchAndReplace\Credits;

use Inpsyde\SearchAndReplace\Settings\AbstractPage;
use Inpsyde\SearchAndReplace\Settings\SettingsPageInterface;

/**
 * Class Credits
 *
 * @package Inpsyde\SearchAndReplace\Credits
 */
class CreditsSettingsPage extends AbstractPage implements SettingsPageInterface {

	/**
	 * {@inheritdoc}
	 */
	public function get_page_title() {

		return esc_html__( 'Credits', 'search-and-replace' );
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_slug() {

		return 'credits';
	}

	/**
	 * {@inheritdoc}
	 */
	public function save( array $request_data = [] ) {

		return TRUE;
	}

	/**
	 * Callback function for credits content.
	 */
	public function render() {

		?>

		<h2><?php esc_html_e( 'Hey nice to have you here!', 'search-and-replace' ); ?></h2>
		<p>
			<?php printf(
				wp_kses(
					__(
						'Search and Replace is refactored in 2015 by <a href="%1$s">Inpsyde GmbH</a>, maintained since 2006 and based on the original from <a href="%2$s">Mark Cunningham</a>.',
						'search-and-replace'
					),
					[
						'a' => [
							'href' => TRUE,
						],
					]
				),
				'http://inpsyde.com/',
				'http://thedeadone.net'
			);
			?>
		</p>

		<h2><?php esc_html_e( 'You rock! contribute the plugin.', 'search-and-replace' ); ?></h2>
		<p>
			<?php printf(
				wp_kses(
					__(
						'You can contribute the Plugin go to the repository on <a href="%s">github</a> making changes, creating issues, or submitting changes.',
						'search-and-replace'
					),
					[
						'a' => [
							'href' => TRUE,
						],
					]
				),
				'https://github.com/inpsyde/search-and-replace/'
			);
			?>
		</p>

		<h2><?php esc_html_e( 'We are Inpsyde', 'search-and-replace' ); ?></h2>
		<p>
			<?php esc_html_e(
				'Inpsyde has developed enterprise solutions with the world’s most popular open-source CMS ever since it was a kitten. We still do, inconvincibly convinced.',
				'search-and-replace'
			);
			?>
		</p>
		<p>
			<?php printf(
				wp_kses(
					__(
						'Inpsyde is a WordPress <a href="%1$s">VIP Service Partner</a> and <a href="%2$s">WooCommerce Expert</a>.',
						'search-and-replace'
					),
					[
						'a' => [
							'href' => TRUE,
						],
					]
				),
				'https://vip.wordpress.com/partner/inpsyde/',
				'https://www.woothemes.com/experts/inpsyde-gmbh/'
			);
			?>
		</p>
		<p>
			<?php printf(
				wp_kses(
					__( 'Look at our other <a href="%s">free WordPress plugins</a>.', 'search-and-replace' ),
					[
						'a' => [
							'href' => TRUE,
						],
					]
				),
				esc_url( 'https://profiles.wordpress.org/inpsyde/#content-plugins' )
			);
			?>
		</p>


		<h2><?php esc_html_e( 'Working at Inpsyde', 'search-and-replace' ); ?></h2>
		<p>
			<?php esc_html_e(
				'As the biggest WordPress enterprise in Europe, we’re dynamically growing and constantly looking for new employees. So, do you want to shape WordPress in an interesting and exciting work environment? Here we are!',
				'search-and-replace'
			);
			?>
		</p>
		<p>
			<?php esc_html_e(
				'At the moment we’re looking for developers for WordPress based products and services. If you’re not a developer and want to be part of us, we’d be happy to recieve your unsolicited application. At Inpsyde you can expect an open, modern and lively company culture:',
				'search-and-replace'
			);
			?>
		</p>
		<ol>
			<li><?php esc_html_e( 'challenging and exciting projects', 'search-and-replace' ); ?></li>
			<li><?php esc_html_e( 'flexible working hours in remote office', 'search-and-replace' ); ?></li>
			<li><?php esc_html_e(
					'deliberately flat hierarchies and short decision paths', 'search-and-replace'
				); ?></li>
			<li><?php esc_html_e( 'a wide variety of tasks', 'search-and-replace' ); ?></li>
			<li><?php esc_html_e(
					'freedom for personal development and responsible, self-reliant action',
					'search-and-replace'
				); ?>
			</li>

		</ol>
		<p>
			<?php printf(
				wp_kses(
				/* translators: $1 is a url */
					__(
						'If you love open source and especially WordPress, if you love to organize your working days by yourself, and you want to use your pragmatic problem-solving skills and result-oriented work methods: <a href="%s">join our team</a>!',
						'search-and-replace'
					),
					[
						'a' => [
							'href' => TRUE,
						],
					]
				),
				'http://inpsyde.com/#jobs'
			);
			?>
		</p>

		<?php
	}

}
