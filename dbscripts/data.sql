##
## Data for table `privileges`
##

INSERT INTO `privileges` (`id`, `Admin`, `User`) VALUES
(1, 0, 1),
(2, 1, 0),
(3, 1, 1);

##
## Location Table 
##
INSERT INTO `location` (`id`, `State`, `Country`, `City`, `Zipcode`, `Address`) 
VALUES (1, 'NC', 'United States', 'Lincolnton', '28092', '8235 2nd Street West'), 
(2, 'MI', 'United States', 'Marquette', '49855', '1653 Pearl Street'),
(3, 'NC', 'United States', 'New Bern', '28560', '1611 Highland Avenue'),
(4, 'GA', 'United States', 'Loganville', '30052', '4334 Euclid Avenue'),
(5, 'NJ', 'United States', 'Newark', '07103', '8570 13th Street');

##
##Members TABLE
##
INSERT INTO `members` (`id`,`First_Name`,`Last_Name`,`Age`,`Location_id`,`Username`,`Email`, `Password`, `Privilege`)
VALUES (1,'Antonio','Vilas Boas','23','1','Ioppowe','stabafrafr@thraml.com', 'Password', '1'),
(2,'Betty','Hill','27','2','Lansdfkit','gumobacutr@thraml.com', 'Password', '1'),
(3,'Charles','Hickson','43','3','Remerint','frecruclic@thraml.com', 'Password', '1'),
(4,'Calvin','Parker','60','4','Cartasizop','bichetusum@thraml.com', 'Password', '2'),
(5,'Travis','Walton','22','5','Liternwa','silononipr@thraml.com', 'Password', '3');

##
## Expereince TABLE
##
INSERT INTO `experience` (`id`,`Exp_Name`,`Description`)
VALUES (1,'Alien Vortex','Ancient alien vortex crystal skull electromagnetic Ezekiel, the answer is a resounding YES... Nazca lines mystery stonehenge magnetic current sanskrit. Space time aircraft vortex pre-colonial aerodynamics anti-gravity clearly portal, the answer is a resounding YES... Legendary times mystery Nazca lines sanskrit, von Daniken Mayan choral castle worm hole mercury.'),
(2,'UFO Easter island','Ancient alien UFO Easter island space travel gods evidence star gates flying vessels, pre-colonial aerodynamics astronaut Vymaanika-Shaastra the vedas NASA Giorgio evidence crystal skull. Earth mound sanskrit anti-gravity kachina doll alien, sun disc burmuta triangle the vedas.'),
(3,'Alien Earth Mound','Ancient alien earth mound petroglyph sanskrit cover up, Sumerian texts sky people vortex ancient alien theorists golden disk, burmuta triangle UFO Giorgio vimana space travel. Ancient religions anti-gravity Mayan Mahabharata electromagnetic, I know it sounds crazy... Spaceships worm hole inter-dimensional magnetic current Annunaki.');

##
## Review TABLE
##
INSERT INTO `exp_reviews` (`id`, `Review`, `Exp_Rating`, `Member_id`, `Exp_id`, `Recommend`) 
VALUES (1,'Every great decision creates ripples. Like a huge boulder dropping in a lake. The ripples merge and rebound off the banks in unforseeable ways. The heavier the decision, the larger the waves, the more uncertain the consequences. So you\'ve got a room for not being awake in. What\'s the point? You\'re just missing the room! Life depends on change and renewal. Like Alice, I try to believe three impossible things before breakfast. The universe hangs by such a delicate thread of coincidences that it would be useless to meddle with it, unless like me you\'re a Time Lord.','4','1','2','1'),
(2,'As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore . . . and this is exploration at its greatest. That\'s one small step for [a] man, one giant leap for mankind.','3','2','1','1'),
(3,'We choose to go to the moon in this decade and do the other things, not because they are easy, but because they are hard, because that goal will serve to organize and measure the best of our energies and skills, because that challenge is one that we are willing to accept, one we are unwilling to postpone, and one which we intend to win. When I orbited the Earth in a spaceship, I saw for the first time how beautiful our planet is. Mankind, let us preserve and increase this beauty, and not destroy it!','2','3','1','0'),
(4,'I believe every human has a finite number of heartbeats. I don\'t intend to waste any of mine','4','4','2','1'),
(5,'To go places and do things that have never been done before – that’s what living is all about.','4','5','3','1');


