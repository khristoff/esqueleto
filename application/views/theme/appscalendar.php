<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
				<div class="fill-container bg-white">
					<div class="relative full-height">
						<div class="display-columns">
							<div class="column events-sidebar hide bg-default-light">
								<button type="button" class="btn btn-default fc-header-btn add-event">
									<span class="icon-plus"></span>
									<span>Add new event</span>
								</button>
								<ul class="external-events p-a" id="external-events">
									<li>
										<div class="external-event event-primary" data-class="event-primary">
											<span>Shopping</span>
										</div>
									</li>
									<li>
										<div class="external-event event-success" data-class="event-success">
											<span>Meeting</span>
										</div>
									</li>
									<li>
										<div class="external-event event-info" data-class="event-info">
											<span>Recreational</span>
										</div>
									</li>
									<li>
										<div class="external-event event-warning" data-class="event-warning">
											<span>Task</span>
										</div>
									</li>
								</ul>
							</div>
							<div class="column calendar-viewer">
								<div class="fullcalendar scroll"></div>
							</div>
						</div>
					</div>
				</div>