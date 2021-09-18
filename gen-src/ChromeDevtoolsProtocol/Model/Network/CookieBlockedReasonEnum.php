<?php

namespace ChromeDevtoolsProtocol\Model\Network;

/**
 * Types of reasons why a cookie may not be sent with a request.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
final class CookieBlockedReasonEnum
{
	public const SECURE_ONLY = 'SecureOnly';
	public const NOT_ON_PATH = 'NotOnPath';
	public const DOMAIN_MISMATCH = 'DomainMismatch';
	public const SAME_SITE_STRICT = 'SameSiteStrict';
	public const SAME_SITE_LAX = 'SameSiteLax';
	public const SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SameSiteUnspecifiedTreatedAsLax';
	public const SAME_SITE_NONE_INSECURE = 'SameSiteNoneInsecure';
	public const USER_PREFERENCES = 'UserPreferences';
	public const UNKNOWN_ERROR = 'UnknownError';
	public const SCHEMEFUL_SAME_SITE_STRICT = 'SchemefulSameSiteStrict';
	public const SCHEMEFUL_SAME_SITE_LAX = 'SchemefulSameSiteLax';
	public const SCHEMEFUL_SAME_SITE_UNSPECIFIED_TREATED_AS_LAX = 'SchemefulSameSiteUnspecifiedTreatedAsLax';
	public const SAME_PARTY_FROM_CROSS_PARTY_CONTEXT = 'SamePartyFromCrossPartyContext';
}
