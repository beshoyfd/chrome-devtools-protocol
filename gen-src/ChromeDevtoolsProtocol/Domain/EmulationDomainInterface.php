<?php
namespace ChromeDevtoolsProtocol\Domain;

use ChromeDevtoolsProtocol\ContextInterface;
use ChromeDevtoolsProtocol\Model\Emulation\CanEmulateResponse;
use ChromeDevtoolsProtocol\Model\Emulation\SetCPUThrottlingRateRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDefaultBackgroundColorOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetDeviceMetricsOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmitTouchEventsForMouseRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetEmulatedMediaRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetGeolocationOverrideRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetNavigatorOverridesRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetPageScaleFactorRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetScriptExecutionDisabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetTouchEmulationEnabledRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetVirtualTimePolicyRequest;
use ChromeDevtoolsProtocol\Model\Emulation\SetVirtualTimePolicyResponse;
use ChromeDevtoolsProtocol\Model\Emulation\SetVisibleSizeRequest;
use ChromeDevtoolsProtocol\Model\Emulation\VirtualTimeAdvancedEvent;
use ChromeDevtoolsProtocol\Model\Emulation\VirtualTimeBudgetExpiredEvent;
use ChromeDevtoolsProtocol\Model\Emulation\VirtualTimePausedEvent;
use ChromeDevtoolsProtocol\SubscriptionInterface;

/**
 * This domain emulates different environments for the page.
 *
 * @generated This file has been auto-generated, do not edit.
 *
 * @author Jakub Kulhan <jakub.kulhan@gmail.com>
 */
interface EmulationDomainInterface
{
	/**
	 * Tells whether emulation is supported.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return CanEmulateResponse
	 */
	public function canEmulate(ContextInterface $ctx): CanEmulateResponse;


	/**
	 * Clears the overriden device metrics.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearDeviceMetricsOverride(ContextInterface $ctx): void;


	/**
	 * Clears the overriden Geolocation Position and Error.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function clearGeolocationOverride(ContextInterface $ctx): void;


	/**
	 * Requests that page scale factor is reset to initial values.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return void
	 */
	public function resetPageScaleFactor(ContextInterface $ctx): void;


	/**
	 * Enables CPU throttling to emulate slow CPUs.
	 *
	 * @param ContextInterface $ctx
	 * @param SetCPUThrottlingRateRequest $request
	 *
	 * @return void
	 */
	public function setCPUThrottlingRate(ContextInterface $ctx, SetCPUThrottlingRateRequest $request): void;


	/**
	 * Sets or clears an override of the default background color of the frame. This override is used if the content does not specify one.
	 *
	 * @param ContextInterface $ctx
	 * @param SetDefaultBackgroundColorOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDefaultBackgroundColorOverride(ContextInterface $ctx, SetDefaultBackgroundColorOverrideRequest $request): void;


	/**
	 * Overrides the values of device screen dimensions (window.screen.width, window.screen.height, window.innerWidth, window.innerHeight, and "device-width"/"device-height"-related CSS media query results).
	 *
	 * @param ContextInterface $ctx
	 * @param SetDeviceMetricsOverrideRequest $request
	 *
	 * @return void
	 */
	public function setDeviceMetricsOverride(ContextInterface $ctx, SetDeviceMetricsOverrideRequest $request): void;


	/**
	 * Call Emulation.setEmitTouchEventsForMouse command.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmitTouchEventsForMouseRequest $request
	 *
	 * @return void
	 */
	public function setEmitTouchEventsForMouse(ContextInterface $ctx, SetEmitTouchEventsForMouseRequest $request): void;


	/**
	 * Emulates the given media for CSS media queries.
	 *
	 * @param ContextInterface $ctx
	 * @param SetEmulatedMediaRequest $request
	 *
	 * @return void
	 */
	public function setEmulatedMedia(ContextInterface $ctx, SetEmulatedMediaRequest $request): void;


	/**
	 * Overrides the Geolocation Position or Error. Omitting any of the parameters emulates position unavailable.
	 *
	 * @param ContextInterface $ctx
	 * @param SetGeolocationOverrideRequest $request
	 *
	 * @return void
	 */
	public function setGeolocationOverride(ContextInterface $ctx, SetGeolocationOverrideRequest $request): void;


	/**
	 * Overrides value returned by the javascript navigator object.
	 *
	 * @param ContextInterface $ctx
	 * @param SetNavigatorOverridesRequest $request
	 *
	 * @return void
	 */
	public function setNavigatorOverrides(ContextInterface $ctx, SetNavigatorOverridesRequest $request): void;


	/**
	 * Sets a specified page scale factor.
	 *
	 * @param ContextInterface $ctx
	 * @param SetPageScaleFactorRequest $request
	 *
	 * @return void
	 */
	public function setPageScaleFactor(ContextInterface $ctx, SetPageScaleFactorRequest $request): void;


	/**
	 * Switches script execution in the page.
	 *
	 * @param ContextInterface $ctx
	 * @param SetScriptExecutionDisabledRequest $request
	 *
	 * @return void
	 */
	public function setScriptExecutionDisabled(ContextInterface $ctx, SetScriptExecutionDisabledRequest $request): void;


	/**
	 * Enables touch on platforms which do not support them.
	 *
	 * @param ContextInterface $ctx
	 * @param SetTouchEmulationEnabledRequest $request
	 *
	 * @return void
	 */
	public function setTouchEmulationEnabled(ContextInterface $ctx, SetTouchEmulationEnabledRequest $request): void;


	/**
	 * Turns on virtual time for all frames (replacing real-time with a synthetic time source) and sets the current virtual time policy.  Note this supersedes any previous time budget.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVirtualTimePolicyRequest $request
	 *
	 * @return SetVirtualTimePolicyResponse
	 */
	public function setVirtualTimePolicy(ContextInterface $ctx, SetVirtualTimePolicyRequest $request): SetVirtualTimePolicyResponse;


	/**
	 * Resizes the frame/viewport of the page. Note that this does not affect the frame's container (e.g. browser window). Can be used to produce screenshots of the specified size. Not supported on Android.
	 *
	 * @param ContextInterface $ctx
	 * @param SetVisibleSizeRequest $request
	 *
	 * @return void
	 */
	public function setVisibleSize(ContextInterface $ctx, SetVisibleSizeRequest $request): void;


	/**
	 * Notification sent after the virtual time has advanced.
	 *
	 * Listener will be called whenever event Emulation.virtualTimeAdvanced is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addVirtualTimeAdvancedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notification sent after the virtual time has advanced.
	 *
	 * Method will block until first Emulation.virtualTimeAdvanced event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return VirtualTimeAdvancedEvent
	 */
	public function awaitVirtualTimeAdvanced(ContextInterface $ctx): VirtualTimeAdvancedEvent;


	/**
	 * Notification sent after the virtual time budget for the current VirtualTimePolicy has run out.
	 *
	 * Listener will be called whenever event Emulation.virtualTimeBudgetExpired is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addVirtualTimeBudgetExpiredListener(callable $listener): SubscriptionInterface;


	/**
	 * Notification sent after the virtual time budget for the current VirtualTimePolicy has run out.
	 *
	 * Method will block until first Emulation.virtualTimeBudgetExpired event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return VirtualTimeBudgetExpiredEvent
	 */
	public function awaitVirtualTimeBudgetExpired(ContextInterface $ctx): VirtualTimeBudgetExpiredEvent;


	/**
	 * Notification sent after the virtual time has paused.
	 *
	 * Listener will be called whenever event Emulation.virtualTimePaused is fired.
	 *
	 * @param callable $listener
	 *
	 * @return SubscriptionInterface
	 */
	public function addVirtualTimePausedListener(callable $listener): SubscriptionInterface;


	/**
	 * Notification sent after the virtual time has paused.
	 *
	 * Method will block until first Emulation.virtualTimePaused event is fired.
	 *
	 * @param ContextInterface $ctx
	 *
	 * @return VirtualTimePausedEvent
	 */
	public function awaitVirtualTimePaused(ContextInterface $ctx): VirtualTimePausedEvent;
}
