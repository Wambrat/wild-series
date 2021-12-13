<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public const EPISODES = [
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "Unaired Pilot",
            'number' => 0,
            'synopsis' => "The first Pilot of what will become The Big Bang Theory. Leonard and Sheldon are two awkward scientists who share an apartment. They meet a drunk girl called Katie and invite her to stay at their place, because she has nowhere to stay. The two guys have a female friend, also a scientist, called Gilda."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "Pilot",
            'number' => 1,
            'synopsis' => "A pair of socially awkward theoretical physicists meet their new neighbor Penny, who is their polar opposite."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Big Bran Hypothesis",
            'number' => 2,
            'synopsis' => "Penny is furious with Leonard and Sheldon when they sneak into her apartment and clean it while she is sleeping."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Fuzzy Boots Corollary",
            'number' => 3,
            'synopsis' => "Leonard gets upset when he discovers that Penny is seeing a new guy, so he tries to trick her into going on a date with him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Luminous Fish Effect",
            'number' => 4,
            'synopsis' => "Sheldon's mother is called to intervene when he delves into numerous obsessions after being fired for being disrespectful to his new boss."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Hamburger Postulate",
            'number' => 5,
            'synopsis' => "Leslie seduces Leonard, but afterwards tells him that she is only interested in a one-night stand."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Middle Earth Paradigm",
            'number' => 6,
            'synopsis' => "The guys are invited to Penny's Halloween party, where Leonard has yet another run-in with Penny's ex-boyfriend Kurt."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Dumpling Paradox",
            'number' => 7,
            'synopsis' => "When Howard hooks up with Penny's old friend, his absence in the gang causes problems for the rest of the guys."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Grasshopper Experiment",
            'number' => 8,
            'synopsis' => "When Raj's parents set him up on a blind date, he finds he can talk to women with the aid of alcohol."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Cooper-Hofstadter Polarization",
            'number' => 9,
            'synopsis' => "Leonard and Sheldon's friendship is put to the test when Leonard wants to present a paper they co-authored at a physics convention, but Sheldon doesn't."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Loobenfeld Decay",
            'number' => 10,
            'synopsis' => "Leonard lies to Penny so that he and Sheldon can get out of watching her perform. However, Sheldon believes that the lie has too many loose ends, so he comes up with a new, unnecessarily complex one to replace it."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Pancake Batter Anomaly",
            'number' => 11,
            'synopsis' => "When Sheldon gets sick, Leonard, Howard and Raj go AWOL, leaving a reluctant Penny to deal with him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Jerusalem Duality",
            'number' => 12,
            'synopsis' => "Sheldon decides to give up his work and focus on other tasks when a 15-year-old prodigy joins the university, so the other guys come up with a plan to get rid of him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Bat Jar Conjecture",
            'number' => 13,
            'synopsis' => "Sheldon becomes so intent on demonstrating his intellectual superiority over the other guys that they kick him off the Physics Bowl team and replace him with his nemesis, Leslie."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Nerdvana Annihilation",
            'number' => 14,
            'synopsis' => "Penny gets mad at the guys when their full scale model of a time machine causes her to miss work, which prompts Leonard to give up all of his nerd memorabilia."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Pork Chop Indeterminacy",
            'number' => 15,
            'synopsis' => "Leonard, Howard and Raj fight over Sheldon's twin sister when she arrives in town. Raj takes part in a drug trial to suppress his selective mutism."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Peanut Reaction",
            'number' => 16,
            'synopsis' => "When Penny learns that Leonard has never had a birthday party, she and the rest of the guys plan a surprise party for him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 1,
            'title' => "The Tangerine Factor",
            'number' => 17,
            'synopsis' => "After a bad breakup, Penny finally agrees to go out on a date with Leonard, however they both develop doubts and turn to Sheldon for advice."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Bad Fish Paradigm",
            'number' => 1,
            'synopsis' => "Leonard becomes concerned when his date with Penny ends abruptly and she starts blowing him off. When told the truth, Sheldon would rather move out than keep Penny's reasons a secret from Leonard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Codpiece Topology",
            'number' => 2,
            'synopsis' => "Sheldon is annoyed when Leonard turns to Leslie for comfort after seeing Penny with another guy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Barbarian Sublimation",
            'number' => 3,
            'synopsis' => "Sheldon introduces Penny to online gaming, however she refuses to quit after becoming addicted."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Griffin Equivalency",
            'number' => 4,
            'synopsis' => "The guys struggle to cope with Raj's arrogance after he is featured in a People magazine article."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Euclid Alternative",
            'number' => 5,
            'synopsis' => "Sheldon annoys the gang when Leonard can't drive him to and from work, so they try to teach him how to drive."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Cooper-Nowitzki Theorem",
            'number' => 6,
            'synopsis' => "Sheldon is flattered when a graduate student takes a shine to him, however her extreme devotion becomes too much to handle."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Panty Piñata Polarization",
            'number' => 7,
            'synopsis' => "Penny plans revenge when Sheldon bans her from his and Leonards apartment, while Howard and Raj use the latest technology to try to find the house being used in America's Next Top Mo"
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Lizard-Spock Expansion",
            'number' => 8,
            'synopsis' => "Leonard and Howard's friendship is jeopardised when Leonard steals a girl from Howard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The White Asparagus Triangulation",
            'number' => 9,
            'synopsis' => "Sheldon believes that Leonard will wreck his relationship with Stephanie, so he decides to take matters into his own hands."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Vartabedian Conundrum",
            'number' => 10,
            'synopsis' => "Leonard tries to slow down his relationship with Stephanie when he realizes that they are living together, while Sheldon becomes convinced that he has an untraceable disease."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Bath Item Gift Hypothesis",
            'number' => 11,
            'synopsis' => "Leonard is disappointed when Penny develops an interest in an attractive physicist at the university. Meanwhile, Sheldon struggles to find an appropriate Christmas gift for Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Killer Robot Instability",
            'number' => 12,
            'synopsis' => "Howard becomes depressed after Penny makes a cruel statement about his love life, while the rest of the guys prepare for a grudge killer robot duel against an obnoxious colleague at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Friendship Algorithm",
            'number' => 13,
            'synopsis' => "Sheldon tries to make friends with Kripke in the hope that it will get him access to a coveted computer at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Financial Permeability",
            'number' => 14,
            'synopsis' => "Leonard and Sheldon try to help out Penny when she can't afford to pay her rent."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Maternal Capacitance",
            'number' => 15,
            'synopsis' => "Sheldon hits it off with Leonard's psychoanalyst mother, but she drives Leonard and Penny to the bottle."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Cushion Saturation",
            'number' => 16,
            'synopsis' => "Howard hooks up with Leslie, while Penny accidentally ruins Sheldon's spot on the couch."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Terminator Decoupling",
            'number' => 17,
            'synopsis' => "On a train to San Francisco, Howard, Raj and Leonard fight for the affections of sci-fi star Summer Glau, while Sheldon is forced to turn to Penny for help when he leaves his flash drive behind."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Work Song Nanocluster",
            'number' => 18,
            'synopsis' => "Sheldon's assistance with Penny's home-based business leads to chaos."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Dead Hooker Juxtaposition",
            'number' => 19,
            'synopsis' => "Penny becomes jealous when a gorgeous new neighbor attracts the guys' attention."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Hofstadter Isotope",
            'number' => 20,
            'synopsis' => "Leonard is upset when the owner of the comic book store goes on a date with Penny, so he convinces Howard and Raj to take him to a bar so that he can pick up a woman of his own."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Vegas Renormalization",
            'number' => 21,
            'synopsis' => "After being dumped by Leslie, Howard heads to Las Vegas with Leonard and Raj. Meanwhile, Penny is forced to take in Sheldon after he locks himself out of his apartment."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Classified Materials Turbulence",
            'number' => 22,
            'synopsis' => "Penny's second date with Stuart has significant implications for Leonard. Howard enlists the guys' help with one of his NASA projects."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 2,
            'title' => "The Monopolar Expedition",
            'number' => 23,
            'synopsis' => "Penny gets upset when she finds out Leonard and the guys plan to work at the North Pole for the summer."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Electric Can Opener Fluctuation",
            'number' => 1,
            'synopsis' => "After returning from the North Pole, a conflict among the guys sends Sheldon back to Texas and interferes with Leonard's reunion with Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Jiminy Conjecture",
            'number' => 2,
            'synopsis' => "Leonard and Penny's first night together goes awkwardly. Sheldon and Howard wager on the species of a cricket."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Gothowitz Deviation",
            'number' => 3,
            'synopsis' => "Sheldon attempts to covertly alter Penny's habits, while Howard and Raj try their luck meeting women at a Goth-style club."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Pirate Solution",
            'number' => 4,
            'synopsis' => "When Raj has to find a new job or be sent back to India, Sheldon's solution leaves Leonard and Penny dealing with Howard as the third wheel."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Creepy Candy Coating Corollary",
            'number' => 5,
            'synopsis' => "Leonard is forced to ask Penny to set Howard up with one of her friends, while Sheldon seeks payback against sci-fi star Wil Wheaton."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Cornhusker Vortex",
            'number' => 6,
            'synopsis' => "Leonard tries to learn about football to fit in with Penny's friends. Meanwhile, a loss in a kite war threatens to end Raj and Howard's friendship."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Guitarist Amplification",
            'number' => 7,
            'synopsis' => "Sheldon is caught in the middle when Leonard and Penny argue about Penny's friend staying at her apartment."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Adhesive Duck Deficiency",
            'number' => 8,
            'synopsis' => "Penny is forced to turn to Sheldon for help when she dislocates her shoulder in the bathtub. Meanwhile, the rest of the guys accidentally get stoned in the desert while waiting for a meteor shower."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Vengeance Formulation",
            'number' => 9,
            'synopsis' => "Sheldon plans revenge after Kripke humiliates him on the radio. Howard develops doubts about his relationship with Bernadette."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Gorilla Experiment",
            'number' => 10,
            'synopsis' => "Sheldon attempts to help Penny understand physics to impress Leonard, while Howard becomes jealous when Bernadette takes an interest in Leonard's research."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Maternal Congruence",
            'number' => 11,
            'synopsis' => "Leonard's mother makes a visit to his dismay and Sheldon's delight."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Psychic Vortex",
            'number' => 12,
            'synopsis' => "Raj talks Sheldon into being his wingman at a university mixer. Leonard has trouble dealing with Penny consulting a psychic."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Bozeman Reaction",
            'number' => 13,
            'synopsis' => "When their apartment is robbed, Leonard and Sheldon turn to Howard and Raj to create a state-of-the-art security system."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Einstein Approximation",
            'number' => 14,
            'synopsis' => "Sheldon wreaks havoc when he is stumped by a difficult physics question."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Large Hadron Collision",
            'number' => 15,
            'synopsis' => "When Leonard is offered a trip to Switzerland on Valentine's Day to visit the CERN laboratory, Sheldon uses any and all means to be his guest instead of Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Excelsior Acquisition",
            'number' => 16,
            'synopsis' => "Sheldon misses an opportunity to get Stan Lee's autograph because he has to make an appearance in traffic court."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Precious Fragmentation",
            'number' => 17,
            'synopsis' => "The guys' friendship is threatened when they find a ring from the Lord of the Rings trilogy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Pants Alternative",
            'number' => 18,
            'synopsis' => "Sheldon seeks help from the rest of the gang in overcoming his fear of public speaking when he receives an award."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Wheaton Recurrence",
            'number' => 19,
            'synopsis' => "Sheldon takes on Wil Wheaton in a game of bowling. Leonard and Penny's relationship comes to a crossroad."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Spaghetti Catalyst",
            'number' => 20,
            'synopsis' => "Sheldon is forced to go behind Leonard's back to spend time with Penny following their breakup."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Plimpton Stimulation",
            'number' => 21,
            'synopsis' => "Chaos ensues when a nymphomaniac physicist visiting Sheldon hooks up with Leonard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Staircase Implementation",
            'number' => 22,
            'synopsis' => "Leonard tells Penny about how he and Sheldon became roommates and what happened to the elevator."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 3,
            'title' => "The Lunar Excitation",
            'number' => 23,
            'synopsis' => "Penny has a night of angry, drunken sex with Leonard, much to his confusion. Meanwhile, Howard and Raj search for Sheldon's perfect match online."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Robotic Manipulation",
            'number' => 1,
            'synopsis' => "Penny ends up tagging along on Sheldon's first ever date with Amy, while Howard finds an unusual use for a robotic arm."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Cruciferous Vegetable Amplification",
            'number' => 2,
            'synopsis' => "When Sheldon calculates the technology to download his consciousness into a robot won't be invented soon enough, he desperately tries to find a way to increase his lifespan."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Zazzy Substitution",
            'number' => 3,
            'synopsis' => "Following his 'breakup' with Amy, the gang become concerned with Sheldon's obsessive search for non-human companionship and call his mother to intervene."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Hot Troll Deviation",
            'number' => 4,
            'synopsis' => "Howard tries to get Penny's help in winning back Bernadette, but first has to confess the embarrassing reason why they broke up in the first place. Raj and Sheldon clash over a desk."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Desperation Emanation",
            'number' => 5,
            'synopsis' => "Sheldon is scared that he is in a relationship when Amy asks him to meet her mother, and Leonard asks Howard and Bernadette to set him up because he is the only person in the group without a girlfriend."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Irish Pub Formulation",
            'number' => 6,
            'synopsis' => "Leonard tries to keep everyone from finding out that he spent the night with Raj's sister, but Sheldon finds out and concocts an elaborate story to help him keep the secret from Raj."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Apology Insufficiency",
            'number' => 7,
            'synopsis' => "An FBI agent interviews the guys when Howard needs to obtain a security clearance."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The 21-Second Excitation",
            'number' => 8,
            'synopsis' => "The guys camp out all night waiting to see an extended cut of Indiana Jones, while Amy joins in on girls' night with Penny and Bernadette."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Boyfriend Complexity",
            'number' => 9,
            'synopsis' => "Penny asks Leonard to pose as her boyfriend when her father visits. Howard, Raj and Bernadette have an awkward encounter when they spend the evening together."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Alien Parasite Hypothesis",
            'number' => 10,
            'synopsis' => "Amy finds she has sexual feelings for Penny's ex-boyfriend Zack, while Raj and Howard try to prove who would be the better superhero."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Justice League Recombination",
            'number' => 11,
            'synopsis' => "The guys enter a costume contest as members of the Justice League and convince Penny and Zack to join them."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Bus Pants Utilization",
            'number' => 12,
            'synopsis' => "Leonard has an idea for a new smartphone app and asks the guys for help, however Sheldon tries to take over the project, and Leonard fires him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Love Car Displacement",
            'number' => 13,
            'synopsis' => "Chaos ensues when the gang spend the weekend together at a science convention."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Thespian Catalyst",
            'number' => 14,
            'synopsis' => "To improve his skills as an instructor, Sheldon asks Penny to give him acting lessons. Meanwhile, Raj begins having impure fantasies about Bernadette."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Benefactor Factor",
            'number' => 15,
            'synopsis' => "To secure needed funding for the university, Sheldon convinces Leonard to get friendly with a wealthy benefactor."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Cohabitation Formulation",
            'number' => 16,
            'synopsis' => "Bernadette makes Howard choose between herself and his mother, while Penny and Raj become upset when Priya returns to town and resumes her relationship with Leonard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Toast Derivation",
            'number' => 17,
            'synopsis' => "Sheldon becomes concerned when everybody begins to hang out at Raj's apartment and discovers Leonard is the center of the group."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Prestidigitation Approximation",
            'number' => 18,
            'synopsis' => "Priya forces Leonard to choose between a relationship with her or a friendship with Penny. A magic trick by Howard has Sheldon fooled."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Zarnecki Incursion",
            'number' => 19,
            'synopsis' => "The guys go all out to help Sheldon find the person responsible for hacking his online gaming account, while the girls' hatred for Priya increases."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Herb Garden Germination",
            'number' => 20,
            'synopsis' => "Sheldon and Amy secretly experiment on the gang by spreading rumors when they hear that Bernadette is thinking about breaking up with Howard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Agreement Dissection",
            'number' => 21,
            'synopsis' => "When Priya finds a loophole in the roommate agreement to throw Sheldon out for the night, Penny, Amy and Bernadette take him to a nightclub."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Wildebeest Implementation",
            'number' => 22,
            'synopsis' => "Sheldon invents a three-player chess game, Penny and Amy use Bernadette to spy on Leonard and Priya, and Raj tries a new drug to treat his social anxiety."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Engagement Reaction",
            'number' => 23,
            'synopsis' => "Howard believes that his mom suffered a heart attack because he told her that he's marrying Bernadette, Sheldon freaks out over germs, and Penny and Priya compare notes on Leonard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 4,
            'title' => "The Roommate Transmogrification",
            'number' => 24,
            'synopsis' => "Raj moves in with Sheldon after hearing Leonard and Priya engage in a Star Trek fantasy in his apartment. Bernadette receives her doctorate."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Skank Reflex Analysis",
            'number' => 1,
            'synopsis' => "The gang deal with the fallout from Penny and Raj's night together."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Infestation Hypothesis",
            'number' => 2,
            'synopsis' => "Amy gets inadvertently caught in the middle of a fight between Sheldon and Penny over a chair. Leonard tries to add some spice to his long-distance relationship with Priya."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Pulled Groin Extrapolation",
            'number' => 3,
            'synopsis' => "Leonard accompanies Amy to a colleague's wedding. Howard tries to convince Bernadette to live with his mother after they get married."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Wiggly Finger Catalyst",
            'number' => 4,
            'synopsis' => "Penny sets up Raj with a deaf friend, not knowing that she's actually a gold digger, and Sheldon decides to let his minor decisions rest on the roll of the dice."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Russian Rocket Reaction",
            'number' => 5,
            'synopsis' => "Sheldon takes offense when Leonard wants to attend a party with Wil Wheaton, while Bernadette tries to block Howard's opportunity to go into outer space."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Rhinitis Revelation",
            'number' => 6,
            'synopsis' => "Sheldon gets upset when his mother comes to visit but refuses to cook for him and attend physics lectures."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Good Guy Fluctuation",
            'number' => 7,
            'synopsis' => "Sheldon tries to get into the spirit of Halloween by trying to scare the guys after they prank him. Leonard seeks Penny's advice when an attractive comic book artist takes an interest in him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Isolation Permutation",
            'number' => 8,
            'synopsis' => "Amy is hurt when Penny and Bernadette go bridesmaid dress shopping without her, so she turns to a reluctant Sheldon for comfort."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Ornithophobia Diffusion",
            'number' => 9,
            'synopsis' => "Sheldon tries to overcome his fear of birds, while Leonard and Penny attempt to hang out together strictly as friends."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Flaming Spittoon Acquisition",
            'number' => 10,
            'synopsis' => "When Stuart asks Amy on a date, Sheldon considers having a more serious relationship with her. Meanwhile, the guys become obsessed with a new card game involving Wild West heroes and witches."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Speckerman Recurrence",
            'number' => 11,
            'synopsis' => "Leonard confronts the man who bullied him in high school, while Penny realizes she did her fair share of tormenting in the past."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Shiny Trinket Maneuver",
            'number' => 12,
            'synopsis' => "Penny helps Sheldon work on his relationship with Amy when he trivializes one of her accomplishments. Howard is irked by Bernadette's dislike of children."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Recombination Hypothesis",
            'number' => 13,
            'synopsis' => "Leonard and Penny contemplate reviving their romantic relationship."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Beta Test Initiation",
            'number' => 14,
            'synopsis' => "Leonard and Penny develop a system to ensure their dates go smoothly. Raj finally finds a woman he can talk to - the virtual assistant on his mobile phone."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Friendship Contraction",
            'number' => 15,
            'synopsis' => "Leonard signs out of his roommate agreement, reducing himself and Sheldon to mere acquaintances, while Howard tries to think of a cool astronaut nickname for himself."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Vacation Solution",
            'number' => 16,
            'synopsis' => "When the university forces Sheldon to use vacation days, he decides to hang out in Amy's lab. Howard becomes upset when he hears Bernadette wants him to sign a prenuptial agreement."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Rothman Disintegration",
            'number' => 17,
            'synopsis' => "Sheldon battles Kripke for a coveted office at the university. Penny receives a very unusual gift from Amy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Werewolf Transformation",
            'number' => 18,
            'synopsis' => "Sheldon wreaks havoc when he tries to get a haircut from his regular barber, who is ill. Howard runs into a few problems with astronaut training."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Weekend Vortex",
            'number' => 19,
            'synopsis' => "Sheldon has to choose between joining Amy at her aunt's birthday party or playing videogames all weekend with the guys."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Transporter Malfunction",
            'number' => 20,
            'synopsis' => "Raj gets quite a surprise when he asks his parents to set him up on a date. Penny buys Leonard and Sheldon a pair of Star Trek keepsake collectibles."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Hawking Excitation",
            'number' => 21,
            'synopsis' => "Sheldon uses any and all means to meet his hero, Dr. Stephen Hawking."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Stag Convergence",
            'number' => 22,
            'synopsis' => "The guys throw Howard a bachelor party, and some embarrassing details about his life get posted on the Internet."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Launch Acceleration",
            'number' => 23,
            'synopsis' => "NASA cancel, and later reinstate Howard's mission into space, coinciding with his wedding. Leonard inadvertently jeopardizes his relationship with Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 5,
            'title' => "The Countdown Reflection",
            'number' => 24,
            'synopsis' => "As Howard prepares for his mission into space, flashbacks show the recent events leading up to his and Bernadette's wedding."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Date Night Variable",
            'number' => 1,
            'synopsis' => "Raj crashes Sheldon and Amy's second anniversary and interferes in Leonard and Penny's relationship. Howard gets caught in the middle of an argument between Bernadette and his mother."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Decoupling Fluctuation",
            'number' => 2,
            'synopsis' => "Penny continues to have doubts about her relationship with Leonard. Meanwhile, Howard becomes the target of practical jokes on the space station."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Higgs Boson Observation",
            'number' => 3,
            'synopsis' => "When Sheldon hires a female grad student to assist him, a jealous Amy asks Penny to help her spy on them. On the space station, Howard begins behaving erratically."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Re-Entry Minimization",
            'number' => 4,
            'synopsis' => "Howard is offended when his return from space is met with little fanfare. Penny and Amy take on Sheldon and Leonard during game night."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Holographic Excitation",
            'number' => 5,
            'synopsis' => "While Raj plans Stuart's Halloween party at the comic book store, Howard annoys the rest of the gang by constantly talking about space, and Penny tries to take more of an interest in Leonard's work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Extract Obliteration",
            'number' => 6,
            'synopsis' => "Penny enrolls in a college class and keeps it a secret from Leonard. Sheldon causes conflict with Dr. Stephen Hawking over an online game."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Habitation Configuration",
            'number' => 7,
            'synopsis' => "Howard makes a decision whether or not to move out of his mother's house, while Sheldon is caught in the middle of an argument between Amy and Wil Wheaton."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The 43 Peculiarity",
            'number' => 8,
            'synopsis' => "Leonard feels threatened after hearing about Penny's study partner at school, while Howard and Raj become determined to find out one of Sheldon's secrets."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Parking Spot Escalation",
            'number' => 9,
            'synopsis' => "The gang are drawn into a fight between Howard and Sheldon over Sheldon's vacant parking spot at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Fish Guts Displacement",
            'number' => 10,
            'synopsis' => "Howard tries to bond with Bernadette's father during a fishing trip. When Sheldon is obligated to take care of a sick Amy, she finds ways to take advantage of the situation."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Santa Simulation",
            'number' => 11,
            'synopsis' => "The girls take Raj out to a nightclub to find him a date. A game of Dungeons and Dragons rekindle old memories of Santa for Sheldon."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Egg Salad Equivalency",
            'number' => 12,
            'synopsis' => "When Penny finds out Alex has a crush on Leonard, Sheldon gets himself and the rest of the guys in trouble with Human Resources whilst trying to solve the problem."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Bakersfield Expedition",
            'number' => 13,
            'synopsis' => "The guys are stranded in the middle of nowhere when Leonard's car is stolen on the way to the Bakersfield Comic-Con. Back home, the girls try to figure out why the guys are so fascinated with comic books."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Cooper/Kripke Inversion",
            'number' => 14,
            'synopsis' => "Sheldon is forced to work with Kripke on a project and must concoct an elaborate lie when he can't hold up his end of the work. Howard and Raj get superhero figurines made of themselves."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Spoiler Alert Segmentation",
            'number' => 15,
            'synopsis' => "Leonard moves in with Penny after a fight with Sheldon, which causes Amy to want to move in with Sheldon. Meanwhile, Raj has a frightening experience with Howard's mother."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Tangible Affection Proof",
            'number' => 16,
            'synopsis' => "Sheldon gets Alex to buy a Valentine's Day gift for Amy. Leonard, Penny, Howard and Bernadette have a disastrous dinner together. Raj and Stuart host a 'Lonely People party' at the comic book store."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Monster Isolation",
            'number' => 17,
            'synopsis' => "Raj falls apart after his date sneaks out on him, and Sheldon reluctantly returns the favor after Penny helps him out with his 'Fun With Flags' program."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Contractual Obligation Implementation",
            'number' => 18,
            'synopsis' => "Leonard, Sheldon and Howard give lectures on science to junior high students. The girls ditch work to go to Disneyland. Raj devises a date for Lucy that fixes their social anxiety problems."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Closet Reconfiguration",
            'number' => 19,
            'synopsis' => "Howard becomes upset when Sheldon finds a letter from his estranged father whilst cleaning out his and Bernadette's closet."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Tenure Turbulence",
            'number' => 20,
            'synopsis' => "Leonard, Sheldon, Raj and Kripke battle for tenure at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Closure Alternative",
            'number' => 21,
            'synopsis' => "Amy tries to help a depressed Sheldon find closure when one of his favorite TV shows is canceled. Raj becomes paranoid when he finds Lucy's blog."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Proton Resurgence",
            'number' => 22,
            'synopsis' => "Bernadette and Howard offer to watch Raj's dog and live to regret it. Leonard and Sheldon hire their favorite childhood star to make an appearance."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Love Spell Potential",
            'number' => 23,
            'synopsis' => "A date between Raj and Lucy takes both of them out of their comfort zones. After a trip to Las Vegas goes awry, the girls join in on a Dungeons and Dragons game, which causes Amy and Sheldon to re-evaluate their relationship."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 6,
            'title' => "The Bon Voyage Reaction",
            'number' => 24,
            'synopsis' => "Penny is thrown for a loop when Leonard is offered a job overseas, but the news is an even bigger shock to Sheldon. Raj and Lucy's relationship comes to a crossroad."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Hofstadter Insufficiency",
            'number' => 1,
            'synopsis' => "Sheldon and Penny bond over missing Leonard. Howard tries to help Raj get over his breakup with Lucy. Amy and Bernadette take a trip together to a biology convention."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Deception Verification",
            'number' => 2,
            'synopsis' => "Sheldon feels betrayed when Leonard returns from the North Sea and wants to spend his time with Penny instead of him. Howard's latest foray into helping his mother has some disastrous side effects."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Scavenger Vortex",
            'number' => 3,
            'synopsis' => "The gang get competitive when they are forced to take part in Raj's scavenger hunt."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Raiders Minimization",
            'number' => 4,
            'synopsis' => "Sheldon gets mad at Amy for ruining one of his favorite movies, Raj and Stuart try to make their online dating profiles more appealing, and Leonard tries to play the sympathy card with Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Workplace Proximity",
            'number' => 5,
            'synopsis' => "After a fight with Bernadette, Howard ends up on Raj's couch. Sheldon and Amy clash when Amy takes a job at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Romance Resonance",
            'number' => 6,
            'synopsis' => "Howard plans something special to celebrate the anniversary of his first date with Bernadette. Sheldon is conflicted when he makes a major scientific breakthrough but some details have to be corrected."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Proton Displacement",
            'number' => 7,
            'synopsis' => "Sheldon seeks payback when Arthur 'Professor Proton' Jeffries asks Leonard for help on a project instead of him. Raj gets upset at Howard for crashing his night with the girls."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Itchy Brain Simulation",
            'number' => 8,
            'synopsis' => "Sheldon demands Leonard make up for a mistake from their past. Penny confronts Raj's ex-girlfriend, Lucy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Thanksgiving Decoupling",
            'number' => 9,
            'synopsis' => "The gang spend Thanksgiving at Mrs. Wolowitz's house. Howard tries to bond with his father-in-law, and a mistake from Penny's past comes back to haunt her."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Discovery Dissipation",
            'number' => 10,
            'synopsis' => "Leonard has to deal with the fallout of disproving Sheldon's new scientific discovery. Raj spends a week at Howard and Bernadette's apartment."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Cooper Extraction",
            'number' => 11,
            'synopsis' => "While Sheldon is at home in Texas, the rest of the gang decorate for Christmas and think about how much he has affected their lives."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Hesitation Ramification",
            'number' => 12,
            'synopsis' => "After Leonard tries to help Penny following a failed role on a TV show, she makes an important decision. Meanwhile, Raj and Stuart try to practice their social skills, and Sheldon navigates the intricacies of being funny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Occupation Recalibration",
            'number' => 13,
            'synopsis' => "Sheldon tries to relax after he is forced to take a vacation. Leonard struggles to be supportive of Penny after she quits her job. Amy receives unwanted attention from a co-worker. Bernadette seeks Stuart's help in replacing one of Howard's comic books."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Convention Conundrum",
            'number' => 14,
            'synopsis' => "When the guys can't get hold of any Comic-Con tickets, Sheldon tries to hold his own convention and ends up spending a wild night with James Earl Jones. Meanwhile, the girls try to feel more mature by going to a fancy hotel for tea."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Locomotive Manipulation",
            'number' => 15,
            'synopsis' => "Sheldon and Amy take a train ride to Napa Valley with Howard and Bernadette on Valentine's Day. Leonard and Penny take Raj's dog to the vet when she accidentally eats some chocolate."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Table Polarization",
            'number' => 16,
            'synopsis' => "Leonard's purchase of a dining room table causes Sheldon to reevaluate the changes in his life. Meanwhile, Howard is offered a chance to go back to space and Bernadette struggles with whether or not to encourage him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Friendship Turbulence",
            'number' => 17,
            'synopsis' => "After arguing with Sheldon, Howard tries to make amends by taking him to NASA headquarters in Houston. Penny has second thoughts about quitting her waitressing job when her car dies. Amy gets involved in trying to find Raj a date."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Mommy Observation",
            'number' => 18,
            'synopsis' => "When Sheldon visits his mother in Houston, he is forced to confront a new reality. Back in Pasadena, the rest of the gang reluctantly take part in Raj's Murder Mystery party."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Indecision Amalgamation",
            'number' => 19,
            'synopsis' => "While Raj is wracked with guilt when he tries to date Lucy and Emily at the same time, Penny wrestles with whether to take a role in a cheesy movie and Sheldon is torn trying to choose between two gaming systems."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Relationship Diremption",
            'number' => 20,
            'synopsis' => "Penny tries to help Sheldon when he reconsiders his 'relationship' with String Theory. During a dinner with Howard and Bernadette, Raj discovers Howard once embarrassed himself on a date with Emily."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Anything Can Happen Recurrence",
            'number' => 21,
            'synopsis' => "When Sheldon tries to be spontaneous, it leads to unexpected friction between the girls. Meanwhile, Raj seeks Howard's help in preparing for a date with Emily."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Proton Transmogrification",
            'number' => 22,
            'synopsis' => "As the gang celebrate Star Wars Day, Sheldon has difficulty dealing with the recent death of Arthur 'Professor Proton' Jeffries."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Gorilla Dissolution",
            'number' => 23,
            'synopsis' => "Penny gets fired from her movie and takes a serious look at her life. Raj sees Emily on a date with another man at the movies. Howard and Bernadette have to take care of his mother after she breaks her leg."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 7,
            'title' => "The Status Quo Combustion",
            'number' => 24,
            'synopsis' => "Sheldon gets upset about his career, the destruction of the comic book store and Leonard and Penny's future living arrangements. Howard and Bernadette struggle to keep hold of a caregiver for Mrs. Wolowitz."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Locomotion Interruption",
            'number' => 1,
            'synopsis' => "Sheldon's trip comes to an end when he is robbed, Penny interviews for a job at Bernadette's company, and Howard is weirded out by his mother's relationship with Stuart."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Junior Professor Solution",
            'number' => 2,
            'synopsis' => "Sheldon is forced to teach a class as a Junior Professor. Meanwhile, Amy plays both sides when tension arises between Penny and Bernadette."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The First Pitch Insufficiency",
            'number' => 3,
            'synopsis' => "Howard becomes nervous after NASA asks him to throw out the first pitch at a Los Angeles Angels game. Meanwhile, Leonard and Penny try to prove Sheldon wrong when he says that he and Amy have a 'superior' relationship."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Hook-up Reverberation",
            'number' => 4,
            'synopsis' => "Raj's honesty about his past comes back to haunt him after Emily takes a dislike to Penny. Meanwhile, the guys consider investing in the comic book store."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Focus Attenuation",
            'number' => 5,
            'synopsis' => "The girls head to Las Vegas, while the guys try to invent something cool, but only come up with new ways to procrastinate."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Expedition Approximation",
            'number' => 6,
            'synopsis' => "Sheldon and Raj test whether they could survive a dark-matter research expedition in a salt mine by simulating the conditions in a steam tunnel. Meanwhile, Leonard and Penny seek advice from Howard and Bernadette when they argue about money."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Misinterpretation Agitation",
            'number' => 7,
            'synopsis' => "The guys befriend one of Penny's clients when he shows up at her apartment. Meanwhile, Bernadette gets upset when Amy torpedoes an article about her for a local magazine."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Prom Equivalency",
            'number' => 8,
            'synopsis' => "The girls decide to re-enact their high school proms with the guys. While Sheldon feels under pressure to commit to his relationship with Amy, Howard worries about who Stuart will bring as his date."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Septum Deviation",
            'number' => 9,
            'synopsis' => "Sheldon panics when Leonard announces he has to go into the hospital for surgery. Raj discovers his parents have divorced."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Champagne Reflection",
            'number' => 10,
            'synopsis' => "While Sheldon retires 'Fun With Flags', Leonard, Howard and Raj look for something significant in a dead professor's research, and Bernadette finds out what her colleagues really think of her."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Clean Room Infiltration",
            'number' => 11,
            'synopsis' => "Amy hosts a traditional Victorian Christmas Eve dinner as Raj's father comes to visit, while the guys try to shoo out a bird they let into the university clean room."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Space Probe Disintegration",
            'number' => 12,
            'synopsis' => "Raj worries a probe he designed will not work in outer space, while Leonard and Sheldon go shopping with Penny and Amy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Anxiety Optimization",
            'number' => 13,
            'synopsis' => "When Sheldon becomes stuck in a rut with his work, the gang try to help him by raising his stress levels. Howard teases Raj with a game called 'Emily or Cinnamon.'"
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Troll Manifestation",
            'number' => 14,
            'synopsis' => "Leonard and Sheldon defend themselves against criticism from an online bully, while the girls confront embarrassing moments from their pasts."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Comic Book Store Regeneration",
            'number' => 15,
            'synopsis' => "Howard receives some shocking news as everyone prepares for the re-opening of the comic book store. Meanwhile, Penny tries to teach Sheldon how to 'let it go,' but can't follow her own advice when she learns something infuriating about Amy."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Intimacy Acceleration",
            'number' => 16,
            'synopsis' => "Sheldon and Penny agree to participate in an unusual experiment. Leonard, Amy, Raj and Emily spend the evening trying to escape a room with a 'zombie'. Howard and Bernadette run into trouble at the airport after returning from Mrs. Wolowitz's funeral."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Colonization Application",
            'number' => 17,
            'synopsis' => "A trip to the pet store ends in a fight after Amy learns Sheldon has applied for a one-way mission to colonize Mars. Meanwhile, Leonard surprises Penny with a very 'adult' purchase, and Raj gets into trouble when he snoops around Emily's apartment."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Leftover Thermalization",
            'number' => 18,
            'synopsis' => "Tension arises when a magazine fails to mention Leonard in an article about the paper he co-wrote with Sheldon, and a blackout at Mrs. Wolowitz's home leads to a final family dinner in her honor."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Skywalker Incursion",
            'number' => 19,
            'synopsis' => "When Leonard and Sheldon are invited to speak at UC Berkeley, they take a detour to try and meet one of their idols. Meanwhile, while cleaning out Mrs. Wolowitz's house, a ping pong battle ensues when Howard and Bernadette argue over the fate of his TARDIS."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Fortification Implementation",
            'number' => 20,
            'synopsis' => "Howard meets the half-brother he never knew he had. Penny is invited to appear on Wil Wheaton's podcast."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Communication Deterioration",
            'number' => 21,
            'synopsis' => "When Raj is asked to create a message on the off chance a NASA mission discovers alien life, the guys fight over what he should do, while Penny contemplates returning to acting."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Graduation Transmission",
            'number' => 22,
            'synopsis' => "Howard questions his engineering abilities when he and Sheldon can't get a toy drone to fly. A cancelled flight nearly prevents Leonard from giving the commencement address at his former high school. Raj pits his parents against each other when his father cuts him off financially."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Maternal Combustion",
            'number' => 23,
            'synopsis' => "Personalities collide when Leonard and Sheldon's mothers meet for the first time. Bernadette reaches her limit with Howard and Stuart."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 8,
            'title' => "The Commitment Determination",
            'number' => 24,
            'synopsis' => "As Sheldon presses Leonard and Penny to set a wedding date, he encounters major changes in his relationship with Amy. Meanwhile, Raj wonders if he should break up with Emily, and Howard and Bernadette struggle to ask Stuart to move out."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Matrimonial Momentum",
            'number' => 1,
            'synopsis' => "Penny struggles with Leonard's confession that he kissed another woman as they prepare to get married in Las Vegas. Meanwhile, Sheldon doesn't know what to do after Amy pushes pause on their relationship."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Separation Oscillation",
            'number' => 2,
            'synopsis' => "Leonard and Penny try to work through their marital issues. Meanwhile, Sheldon films a special episode of 'Fun with Flag' after his breakup with Amy, and Bernadette feels guilty about withholding a secret from Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Bachelor Party Corrosion",
            'number' => 3,
            'synopsis' => "The guys's skills are put to the test when they get a flat tire on the way to Mexico for Leonard's bachelor party. The girls throw Penny a mini-bachelorette party."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The 2003 Approximation",
            'number' => 4,
            'synopsis' => "An impending change to his living arrangements inspires Sheldon to revert to 2003, before he met Penny and Leonard. Raj and Howard form a band for the comic book store."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Perspiration Implementation",
            'number' => 5,
            'synopsis' => "Kripke expresses interest in Amy while leading a fencing lesson for the guys. Meanwhile, Stuart seeks help from the girls in getting more women interested in the comic book store."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Helium Insufficiency",
            'number' => 6,
            'synopsis' => "Leonard and Sheldon go to great lengths to secure the helium they need during a nation-wide shortage. Meanwhile, the rest of the gang try to find Amy a new boyfriend on a dating app."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Spock Resonance",
            'number' => 7,
            'synopsis' => "While being interviewed for a documentary about Spock from Star Trek (1966), Sheldon struggles to suppress his emotions about his recent break-up from Amy. Meanwhile, Howard and Bernadette butt heads over renovating his mother's house."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Mystery Date Observation",
            'number' => 8,
            'synopsis' => "Sheldon, Howard and Raj post an ad online to find a new girlfriend for Sheldon. Penny and Bernadette decide to spy when Amy is secretive about who she is dating."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Platonic Permutation",
            'number' => 9,
            'synopsis' => "On Thanksgiving, Sheldon and Amy try to spend time together as friends and go to an aquarium, Howard reluctantly agrees to volunteer at the soup kitchen with Bernadette, Raj and Emily, and Penny discovers that Leonard knows more about her than she thought."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Earworm Reverberation",
            'number' => 10,
            'synopsis' => "Sheldon has a revelation when he realizes why a song was stuck in his head. Meanwhile, Amy invites Dave over for dinner despite their previously awkward date, and Howard and Raj become obsessed with a fan of their band."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Opening Night Excitation",
            'number' => 11,
            'synopsis' => "Leonard, Howard and Raj have to decide who will take their extra Star Wars movie ticket, while Sheldon plans something special for Amy's birthday."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Sales Call Sublimation",
            'number' => 12,
            'synopsis' => "Penny gets more than she bargained for when Leonard agrees to meet with a psychiatrist on her behalf to make a sale. Meanwhile, Sheldon and Raj collaborate on an astronomical discovery, and Howard and Bernadette's happiness is short-lived after Stuart moves out."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Empathy Optimization",
            'number' => 13,
            'synopsis' => "After being forced to deal with a sick Sheldon, the rest of the gang try to treat themselves to a Sheldon-free weekend."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Meemaw Materialization",
            'number' => 14,
            'synopsis' => "Sheldon is thrilled when his Meemaw comes to visit, but his excitement quickly fades when she butts heads with Amy. Meanwhile, Raj meets a girl at the comic book store who makes him question his relationship with Emily."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Valentino Submergence",
            'number' => 15,
            'synopsis' => "Sheldon and Amy host a Valentine's Day episode of 'Fun with Flags', Leonard and Penny grapple with getting older, Howard and Bernadette find a surprise in their hot tub and Raj is torn between Emily and Claire."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Positive Negative Reaction",
            'number' => 16,
            'synopsis' => "Bernadette reveals her pregnancy to Howard and the rest of the gang."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Celebration Experimentation",
            'number' => 17,
            'synopsis' => "The gang convince Sheldon to celebrate his birthday and throw him a party."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Application Deterioration",
            'number' => 18,
            'synopsis' => "Leonard, Sheldon, and Howard run into problems when they file for a patent for their infinite persistence gyroscope. Meanwhile, the girls give Raj dating advice when Emily reaches out to him after their breakup."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Solder Excursion Diversion",
            'number' => 19,
            'synopsis' => "Amy is shocked at a revelation from Sheldon after she buys him a new laptop. Meanwhile, Raj sells out Leonard and Howard after they lie to their wives in order to attend an early screening of a movie."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Big Bear Precipitation",
            'number' => 20,
            'synopsis' => "Secrets are revealed when Amy and Sheldon join Penny and Leonard on a weekend cabin trip. Raj is more excited about Howard's and Bernadette's impending parenthood than they are."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Viewing Party Combustion",
            'number' => 21,
            'synopsis' => "The gang pick sides when a small argument between Leonard and Sheldon erupts into a heated fight during a 'Game of Thrones' viewing party."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Fermentation Bifurcation",
            'number' => 22,
            'synopsis' => "Sheldon and Bernadette spend the evening together while the rest of the gang go to a wine tasting party, but things get uncomfortable for Raj when Penny's ex-boyfriend Zack shows up and takes an interest in Claire."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Line Substitution Solution",
            'number' => 23,
            'synopsis' => "Sheldon hires Stuart to spend the day with Amy when he would rather go to the movies. Meanwhile, Penny struggles to make a connection with Leonard's mother when she comes to visit."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 9,
            'title' => "The Convergence Convergence",
            'number' => 24,
            'synopsis' => "Leonard and Penny try to have a wedding ceremony that everyone can attend, but it creates serious conflict among Sheldon's mother and Leonard's divorced parents. Meanwhile, Howard and Raj become convinced the government is out to get them."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "Recap",
            'number' => 0,
            'synopsis' => "A collection of some of last season's hilarious and most memorable moments."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Conjugal Conjecture",
            'number' => 1,
            'synopsis' => "As Leonard and Penny attempt to hold another wedding ceremony everyone can attend, they have to deal with Penny's family arriving and Leonard's father spending the night with Sheldon's mother."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Military Miniaturization",
            'number' => 2,
            'synopsis' => "Howard is visited by an Air Force colonel regarding his invention. Penny accidentally lets it slip about Bernadette's pregnancy to their co-workers."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Dependence Transcendence",
            'number' => 3,
            'synopsis' => "Bernadette confesses to Raj that she isn't sure if she's ready to be a mother, Penny accompanies Amy to a university mixer, and Sheldon goes to unusual extremes to assist Howard with his military project."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Cohabitation Experimentation",
            'number' => 4,
            'synopsis' => "When Amy must vacate her apartment for repairs, living arrangements are made with Leonard, Sheldon, and Penny. Howard and Bernadette don't want to know the sex of their baby, but Raj finds out."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Hot Tub Contamination",
            'number' => 5,
            'synopsis' => "Sheldon and Amy go through a period of adjustment with their new living arrangement. Howard and Bernadette are forced to vacation at home when she falls ill and keep it a secret, unaware Raj and Stuart planned to use their hot tub."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Fetal Kick Catalyst",
            'number' => 6,
            'synopsis' => "Sheldon and Amy host a brunch. Penny is surprised by her popularity when her movie, 'Serial Ape-Ist' is featured at a Van Nuys comic book convention. Howard starts to freak out about parenthood after feeling the baby kick for the first time."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Veracity Elasticity",
            'number' => 7,
            'synopsis' => "Amy doesn't tell Sheldon her apartment has been repaired. Leonard finds out Penny is slowly moving all of his collectible toys into storage."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Brain Bowl Incubation",
            'number' => 8,
            'synopsis' => "A successful gene experimentation leaves Sheldon excited to procreate with Amy, and he pulls out all stops to get her on board. Meanwhile, Raj takes an interest in the cleaning lady at the university."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Geology Elevation",
            'number' => 9,
            'synopsis' => "Sheldon can't contain his jealousy when Bert wins a grant for his geology research. A distasteful toy built by Howard faces judgement from the gang."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Property Division Collision",
            'number' => 10,
            'synopsis' => "Dividing up their possessions becomes an all-out war between Leonard and Sheldon. Stuart asks to live with Howard and Bernadette and tries to supplant Raj's efforts to help with the new baby."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Birthday Synchronicity",
            'number' => 11,
            'synopsis' => "Amy's desire to have an intimate night with Sheldon on her birthday is interrupted by Bernadette going into labor."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Holiday Summation",
            'number' => 12,
            'synopsis' => "After spending the holidays apart, the gang get together to hear about Sheldon's and Amy's trip to Texas, Leonard's and Penny's Christmas tree adventure, and Howard's and Bernadette's first days as parents."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Romance Recalibration",
            'number' => 13,
            'synopsis' => "Leonard and Penny ask for Sheldon's and Amy's help on putting the romance back in their marriage. Howard and Raj go to extreme lengths to stop the floor in Halley's bedroom from making noise."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Emotion Detection Automation",
            'number' => 14,
            'synopsis' => "Penny wants to help her brother get a job with her company. Sheldon learns of a machine that will help him understand human emotions. Raj reunites some of his old girlfriends to figure out why he is still single."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Locomotion Reverberation",
            'number' => 15,
            'synopsis' => "Leonard and Howard's attempt to keep Sheldon away from their Air Force project by sending him on a train trip backfires. Penny and Amy take Bernadette for her first night out since having the baby."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Allowance Evaporation",
            'number' => 16,
            'synopsis' => "Sheldon and Amy have their first fight since moving in together. Meanwhile Raj is shocked at the reality of financial independence when he stops receiving support from his father."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Comic-Con Conundrum",
            'number' => 17,
            'synopsis' => "The guys' annual trip to Comic Con is in doubt when Raj can't afford to go."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Escape Hatch Identification",
            'number' => 18,
            'synopsis' => "When the gang offer places for Raj to live, it creates unexpected conflict among everyone."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Collaboration Fluctuation",
            'number' => 19,
            'synopsis' => "Leonard, Penny and Raj adjust to their new living arrangements; Sheldon expresses an interest in Amy's work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Recollection Dissipation",
            'number' => 20,
            'synopsis' => "Sheldon reaches his limit when he works on projects with Leonard, Howard and Amy in one day. Bernadette has doubts about leaving Halley when she goes back to work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Separation Agitation",
            'number' => 21,
            'synopsis' => "Howard and Bernadette have a hard time leaving Halley in daycare when Bernadette returns to work. Bert introduces the gang to his new girlfriend."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Cognition Regeneration",
            'number' => 22,
            'synopsis' => "Leonard is less than thrilled when Penny considers accepting a job offer from her ex-boyfriend, Zack. Sheldon worries that he hasn't reached his full potential soon enough."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Gyroscopic Collapse",
            'number' => 23,
            'synopsis' => "After celebrating the completion of the top-secret Air Force project, Leonard, Sheldon and Howard get an unwelcome surprise; Amy receives an offer for a summer position at Princeton as a visiting researcher."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 10,
            'title' => "The Long Distance Dissonance",
            'number' => 24,
            'synopsis' => "The gang become concerned when Sheldon's former admirer, Ramona Nowitzki, resurfaces while Amy is away at Princeton."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Proposal Proposal",
            'number' => 1,
            'synopsis' => "Amy has trouble deciding whether or not she should marry Sheldon. Meanwhile, Bernadette confides in Penny when she finds out some huge news."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Retraction Reaction",
            'number' => 2,
            'synopsis' => "Leonard angers the University and the Physics Community when he gives an embarrassing radio interview. Bernadette and Amy compare their successes at work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Relaxation Integration",
            'number' => 3,
            'synopsis' => "Sheldon and Amy struggle with picking a wedding date. Meanwhile, Stuart and Raj fight over one of Bernadette's co-workers for a date."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Explosion Implosion",
            'number' => 4,
            'synopsis' => "Howard and Bernadette are disappointed when they find out the sex of the baby. Leonard is annoyed when his mother befriends Penny."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Collaboration Contamination",
            'number' => 5,
            'synopsis' => "Amy and Howard work in the lab together causing Sheldon, Bernadette and Raj to feel jealous and lonely. Penny starts using a parenting book to control Sheldon's behavior."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Proton Regeneration",
            'number' => 6,
            'synopsis' => "Sheldon and Wil Wheaton both go head-to-head for the role of the new Professor Proton, Meanwhile Penny takes care of Halley when Bernadette and Howard are on bed rest."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Geology Methodology",
            'number' => 7,
            'synopsis' => "When Bert asks Sheldon to collaborate on a project with him, Sheldon becomes worried about others finding out because he thinks geology is beneath him. Raj seeks advice after reconnecting with Ruchi."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Tesla Recoil",
            'number' => 8,
            'synopsis' => "Howard and Leonard become upset after they discover that Sheldon has been working with the military without telling them; Bernadette asks Raj to investigate her suspicions that Ruchi is attempting to take her job away from her."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Bitcoin Entanglement",
            'number' => 9,
            'synopsis' => "Sheldon tries to teach the other guys a lesson after they cut him out of a potentially valuable Bitcoin investment seven years ago."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Confidence Erosion",
            'number' => 10,
            'synopsis' => "Sheldon and Amy try to eliminate stress from wedding planning by applying math to the process. Raj and Howard come to blows when Raj begins to feel like Howard hurts his confidence."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Celebration Reverberation",
            'number' => 11,
            'synopsis' => "Raj and Howard's feud continues as the gang plan Halley's first birthday party. Sheldon's surprise for Amy's birthday goes awry when they get food poisoning."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Matrimonial Metric",
            'number' => 12,
            'synopsis' => "Sheldon and Amy pick their best-man and maid of honor by experimenting on the gang. Meanwhile, Leonard's self-confidence is still badly damaged after reading his brother's Christmas letter."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Solo Oscillation",
            'number' => 13,
            'synopsis' => "Sheldon kicks Amy out of the apartment to work solo, and she and Leonard end up bonding during a series of science experiments; Howard is replaced by Bert in Footprints on the Moon."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Separation Triangulation",
            'number' => 14,
            'synopsis' => "Raj meets a girl at the Planetarium, but soon after finds out she is married. Sheldon rents out his old room to use for his work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Novelization Correlation",
            'number' => 15,
            'synopsis' => "Leonard's book raises questions, and Amy guest stars on the new Professor Proton show."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Neonatal Nomenclature",
            'number' => 16,
            'synopsis' => "When Bernadette won't go into labor, the gang try different tactics to get things started. Also, Wolowitz confronts Bernadette after Amy accidentally reveals she's already chosen their son's name."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Athenaeum Allocation",
            'number' => 17,
            'synopsis' => "Leonard jumps through hoops to help secure the perfect wedding venue for Sheldon and Amy. Also, Bernadette and Wolowitz have a hard time deciding who should stay at home with the kids and who should go back to work."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Gates Excitation",
            'number' => 18,
            'synopsis' => "Leonard, Howard and Raj try to meet Bill Gates, who's meeting with Penny to merge their companies; Sheldon thinks he's the victim of an April Fool's prank."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Tenant Disassociation",
            'number' => 19,
            'synopsis' => "Leonard runs against Sheldon to be president of the tenants association; Wolowitz and Koothrappali find a drone in the backyard."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Reclusive Potential",
            'number' => 20,
            'synopsis' => "Sheldon takes the guys to a cabin in the middle of nowhere to meet a reclusive scientist; Penny and Bernadette improvise Amy's bachelorette party."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Comet Polarization",
            'number' => 21,
            'synopsis' => "Sheldon's comic book store experience changes when writer Neil Gaiman puts Stuart's store on the map; friendships are threatened when Koothrappali takes credit for Penny's astronomical discovery."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Monetary Insufficiency",
            'number' => 22,
            'synopsis' => "Sheldon goes to Vegas to win money for science. Also, Penny and Bernadette take Amy wedding dress shopping, but her terrible choice entangles them in a web of lies."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Sibling Realignment",
            'number' => 23,
            'synopsis' => "Sheldon and Leonard make a road trip to wrangle a reluctant wedding guest."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 11,
            'title' => "The Bow Tie Asymmetry",
            'number' => 24,
            'synopsis' => "When Amy's parents and Sheldon's family arrive, everybody is focused to make sure all wedding arrangements go according to plan - everyone except the bride and groom."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Conjugal Configuration",
            'number' => 1,
            'synopsis' => "After their wedding, Amy and Sheldon go on their honeymoon."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Wedding Gift Wormhole",
            'number' => 2,
            'synopsis' => "Leonard and Penny give Sheldon and Amy a baffling wedding gift."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Procreation Calculation",
            'number' => 3,
            'synopsis' => "The Wolowitzes' life gets complicated when Stuart starts bringing his new girlfriend home. Also, Penny and Leonard talk about starting a family while Koothrappali explores an arranged marriage."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Tam Turbulence",
            'number' => 4,
            'synopsis' => "Sheldon won't tell anyone why he's never mentioned Tam, his childhood best friend, so Leonard takes matters into his own hands. Also, Bernadette and Penny take out Raj's fiancée, Anu, for dinner to get the skinny on her."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Planetarium Collision",
            'number' => 5,
            'synopsis' => "Amy doesn't have time to work with Sheldon on super asymmetry, so he goes to great lengths to ensure she's available. Koothrappali doesn't want Wolowitz to join him in hosting a show at the planetarium."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Imitation Perturbation",
            'number' => 6,
            'synopsis' => "When Wolowitz dresses up as Sheldon for Halloween, Sheldon seeks retaliation at Leonard and Penny's Halloween party. Also, Leonard is shocked that Penny doesn't remember their first kiss."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Grant Allocation Derivation",
            'number' => 7,
            'synopsis' => "Leonard is caught between a rock and a hard place when he's responsible for distributing extra grant money. Also, Bernadette turns the backyard playhouse into a hideaway from her husband and kids."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Consummation Deviation",
            'number' => 8,
            'synopsis' => "Sheldon tries to bond with Amy's father, but when Wolowitz lures Mr. Fowler away with magic tricks, Sheldon has no choice but to bond with Mrs. Fowler. Also, Koothrappali and Anu try to get physical for the first time."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Citation Negation",
            'number' => 9,
            'synopsis' => "Sheldon and Amy are devastated after learning from a Russian paper that super asymmetry has already been theorized and disproved. Bernadette wants to beat Howard in a popular video game."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The VCR Illumination",
            'number' => 10,
            'synopsis' => "A VHS tape from Sheldon's past inspires him and Amy not to give up when they're still feeling down about their theory being disproven. Bernadette turns into a pageant mom when she tries to help Howard with his Magic Castle audition."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Paintball Scattering",
            'number' => 11,
            'synopsis' => "Penny and Leonard organize a paintball game, which results in mayhem when Sheldon becomes jealous of Amy. Raj catches Anu with her ex-boyfriend. Stuart doesn't want to move in with Denise."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Propagation Proposition",
            'number' => 12,
            'synopsis' => "Penny's ex-boyfriend Zack learns that he is infertile, so he asks Leonard for help; Koothrappali attempts to mend things with his ex-fiancee Anu."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Confirmation Polarization",
            'number' => 13,
            'synopsis' => "Sheldon and Amy are thrilled when their super asymmetry theory is proven by two physicists, until they try to kick Amy off the Nobel nomination. Bernadette gets one of her drugs approved and wants a reluctant Penny to head the sales team."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Meteorite Manifestation",
            'number' => 14,
            'synopsis' => "Sheldon is thrilled to help Bernadette and Howard navigate bureaucracy concerning a neighbor's non-compliant balcony until he learns they too have ignored codes. Leonard is disappointed when his friends are uninterested in his new laser."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Donation Oscillation",
            'number' => 15,
            'synopsis' => "Penny tries to throw a wrench into Leonard's plan to be a sperm donor for her ex-boyfriend; Wolowitz, Bernadette, Anu and Koothrappali turn Koothrappali's canceled bachelor party into a couple's trip aboard the 'vomit comet.'"
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The D & D Vortex",
            'number' => 16,
            'synopsis' => "The gang finds out Wil Wheaton hosts a celebrity Dungeons and Dragons game involving William Shatner, Joe Manganiello, Kareem Abdul-Jabbar and Kevin Smith. Deception and betrayal are the path to make it to the one open seat."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Conference Valuation",
            'number' => 17,
            'synopsis' => "Bernadette and Penny travel to San Diego for a pharmaceutical sales convention. Back home, Amy and the guys experiment on the Wolowitz children when Sheldon finds a book on it."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Laureate Accumulation",
            'number' => 18,
            'synopsis' => "Rivals Pemberton and Campbell charm America on a publicity tour so Sheldon and Amy try to win over Nobel laureates Kip Thorne, George Smoot and Frances Arnold. Halley's fear of the dark causes opportunity and conflict at the Wolowitz home."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Inspiration Deprivation",
            'number' => 19,
            'synopsis' => "Contemplating what it would mean to all women if she were to win a Nobel Prize causes Amy to have a meltdown. Koothrappali and Wolowitz try to relive the good old days after Wolowitz buys a scooter that looks like the one he had years ago."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Decision Reverberation",
            'number' => 20,
            'synopsis' => "Koothrappali is worried people won't take him seriously in his own field after publishing a paper that suggests he may have discovered alien life. Leonard wants to be the principal investigator on a plasma physics study."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Plagiarism Schism",
            'number' => 21,
            'synopsis' => "Kripke has proof that Dr. Pemberton plagiarized his thesis in college, and Sheldon and Amy aren't sure if they should turn him in. Wolowitz learns that Bernadette wasn't the only waitress at the Cheesecake Factory who had a crush on him."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Maternal Conclusion",
            'number' => 22,
            'synopsis' => "Leonard is pleasantly surprised when Beverly comes to visit and she's genuinely kind to him, until he finds out the real reason she's there. Also, Denise and Stuart overstay their welcome at the Wolowitz house."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Change Constant",
            'number' => 23,
            'synopsis' => "Sheldon and Amy await big news."
        ],
        [
            'serieName' => "The Big Bang Theory",
            'seasonNumber' => 12,
            'title' => "The Stockholm Syndrome",
            'number' => 24,
            'synopsis' => "Bernadette and Wolowitz leave their kids for the first time; Penny and Leonard try to keep a secret; Sheldon and Amy stick together; and Koothrappali makes a new friend, as the gang travels together into an uncharted future."
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 1,
          "title"=> "The Pilot",
          'synopsis' => "    Rachel leaves Barry at the alter and moves in with Monica. Monica goes on a date with Paul the wine guy, who turns out to be less than sincere. Ross is depressed about his failed marriage. Joey compares women to ice cream. Everyone watches Spanish soaps. Ross reveals his high school crush on Rachel. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 2,
          "title"=> "The One with the Sonogram at the End",
          'synopsis' => "    Ross finds out his ex-wife (Carol) is pregnant, and he has to attend the sonogram along with Carol's lesbian life-partner, Susan. Ugly Naked Guy gets a thigh-master. Ross and Monica's parents come for dinner, which stresses Monica out. Ross and Rachel console each other. Rachel returns the ring to Barry, who is much less upset about the break-up than expected. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 3,
          "title"=> "The One with the Thumb",
          'synopsis' => "    Ross discovers the fate of his childhood pet, Chichi. Chandler starts smoking again; when the group complains, he diverts their attention to their own faults. Phoebe gets money she doesn't want; she complains and gets more; she gives it away and gets a can of soda in return... which contains a thumb. The beverage company gives her $7000. Monica's new boyfriend (Alan) is a hit with her friends, but Monica's not too sure. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 4,
          "title"=> "The One with George Stephanopoulos",
          'synopsis' => "    Ross, upset about it being the anniversary of his first time with Carol, goes to a hockey game with Chandler and Joey and gets a puck in the face; they end up at the hospital, where Ross reveals that Carol is the only woman he's even been intimate with. Rachel gets a visit from her old friends, which depresses her about her life. The women have a slumber party, which isn't very fun until they spy on George Stephanopoulos. "
          
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 5,
          "title"=> "The One with the East German Laundry Detergent",
          'synopsis' => "    Chandler and Phoebe decide to break up with Janice and Tony on the same night; Phoebe's goes really well but Chandler has a harder time. Ross arranges to do laundry with Rachel and Monica; Monica cancels, leaving just the two of them; Rachel reveals she's never done laundry before... and accidentally dyes all her white clothes pink. Joey wants his ex-girlfriend (Angela) to break up with her boyfriend (Bob), so he arranges for Monica and him to double date with them... but he tells Monica that Angela and Bob are siblings. Ugly Naked Guy lays kitchen tile. Janice buys Chandler Bullwinkle socks. Rachel is so happy about her laundry experience that she kisses Ross. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 6,
          "title"=> "The One with the Butt",
          'synopsis' => "    Everyone attends Joey's new musical, Freud! While there, Chandler meets a beautiful and exotic woman, Aurora, and begins dating her. Joey gets picked up by the Estelle Leonard Talent Agency, which gets him a job as Al Pacino's butt double. However, he loses the job by overacting. Rachel cleans the apartment by herself for the first time; however, she moves the green ottoman, which starts Monica obsessing. Chandler finds out Aurora is married and already has another boyfriend. When she picks up still another, Chandler isn't sure he can take it. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 7,
          "title"=> "The One with the Blackout",
          'synopsis' => "    New York City is blacked out (due to a mishap on Mad About You). Chandler is trapped in an ATM vestibule with Jill Goodacre. The rest of the gang hangs out at Monica and Rachel's apartment. Ugly Naked Guy lights a bunch of candles and has a slight accident. While trying to share his feelings with Rachel, Ross is attacked by a cat. While searching for the cat's owner, Rachel and Phoebe meet 'the Weird Man', known in later episodes as Mr. Heckles. He tries to claim the cat, but it obviously isn't his. The cat turns out to belong to Paolo, an Italian hunk who lives in the building and doesn't speak much English. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 8,
          "title"=> "The One Where Nana Dies Twice",
          'synopsis' => "    Chandler finds out a lot of people think he's gay when they first meet him; he tries to find out why. Paolo gives Rachel calls and shoes from Rome. Ross and Monica's grandmother dies... twice; At the funeral, Joey watches a football game on a portable TV; Ross falls into an open grave and hurts his back, then gets a bit loopy on muscle relaxers. Monica tries to deal with her mother's criticisms. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 9,
          "title"=> "The One Where Underdog Gets Away",
          'synopsis' => "    Joey poses for a health poster, but later finds out he's become the V.D. poster boy. Ross finds out Susan is reading to the unborn baby and decides he must, too. Ross and Monica plan their own Thanksgiving dinner because their parents are away; Phoebe joins them, because she celebrates with her grandmother and her grandmother's boyfriend... in December... because he's lunar; Joey joins in because his family thinks he has V.D.; Monica has to make three kinds of potatoes. Chandler plans to boycott Thanksgiving because his parents announced their divorce on that day; Rachel has plans to go to Vale to be with her family. The Underdog balloon breaks free during the parade; everyone goes to the roof to watch but they get locked out of Monica's apartment; the dinner is burned and Rachel misses her flight. Everyone ends up eating Chandler's cheese sandwiches and Funyuns for Dinner. Ugly Naked Guy has Thanksgiving dinner with Ugly Naked Gal, and there's Ugly Naked Dancing. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 10,
          "title"=> "The One with the Monkey",
          'synopsis' => "    Ross gets a monkey named Marcel. Everyone makes a pact not to bring dates to their New Years Eve Party. While performing at Central Perk, Phoebe confronts some noisy boys and ends up dating one of them: David, Scientist Guy. Their relationship develops well until he gets offered a grant to go to Minsk, and doesn't know what to do. Everyone breaks the no-date pact except Ross; Phoebe brings David, Joey brings Sandy, someone he met while working as an elf in a department store; Rachel plans to bring Paolo, who's flying in earlier than expected; Chandler snaps and asks Janice; Monica invites Fun Bobby; Ross just brings Marcel. However, no one ends up with their date (or monkey) at midnight. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 11,
          "title"=> "The One with Mrs. Bing",
          'synopsis' => "    Monica and Phoebe distract an attractive guy who then gets hit by a car and ends up in a coma; they both take care of him in the hospital but begin getting very competitive and possessive over him. Chandler's mom (who embarrasses Chandler with her forwardness) is on Jay Leno and then pays Chandler a visit. Paolo returns from Rome. Mrs. Bing takes everyone out to dinner... and ends up kissing Ross. Mrs. Bing gives Rachel advice on writing romance novels. Ross tells Chandler about the kiss and convinces him to confront his mother about his feelings. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 12,
          "title"=> "The One with the Dozen Lasagnas",
          'synopsis' => "    Everyone hums the theme from The Odd Couple. Monica is stuck with a dozen lasagnas because she didn't know they were supposed to be vegetarian. Paolo and Rachel prepare for their first weekend away together; Paolo makes a pass at Phoebe, which ends his relationship with Rachel. Phoebe makes the best oatmeal-raisin cookies in the world. Joey and Chandler have to get a new table, but can't agree on which one; they end up with a foosball table; Monica rules the foosball field. Carol finds out the gender of the baby, but Ross doesn't want to know... even though everyone else knows. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 13,
          "title"=> "The One with the Boobies",
          'synopsis' => "    Chandler accidentally walks in on Rachel after a shower and sees her breasts, leading to a series of shower peepings. Phoebe's new psychiatrist boyfriend, Roger, depresses and angers everyone. Joey finds out his dad has been having an affair with Ronni, a pet mortician, for six years; he insists his dad either break it off or confess, but it turns out his mom already knew--and didn't want it to stop. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 14,
          "title"=> "The One with the Candy Hearts",
          'synopsis' => "    Ross goes on a date with a Kristen, a woman from his apartment building; Carol and Susan show up at the same restaurant; Susan gets paged and leaves; Ross pays so much attention to Carol that he doesn't even notice his date has gone. Joey can't go out with his date, Lorraine, unless he brings a friend for her friend; Chandler agrees to go, but the date turns out to be Janice; Somehow they end up together again; Janice buys Chandler candy hearts for Valentines Day; Chandler breaks up with her--again. Phoebe, Monica, and Rachel have a cleansing ritual to rid themselves of bad luck with men, which turns into a small fire; Fireman guys come to the rescue. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 15,
          "title"=> "The One with the Stoned Guy",
          'synopsis' => "    Chandler gets offered a promotion at work but turns it down because he doesn't like his career; his boss, however, keeps offering more money until Chandler accepts; he spends the day showing off his new office to Phoebe and his night working late. A client of Phoebe's needs a new head-chef, so Monica auditions for him; unfortunately, he's stoned and the evening is a disaster. Ross goes out with Celia, a woman from the museum, who wants him to talk dirty; it's a skill he hasn't quite mastered... at first. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 16,
          "title"=> "The One with Two Parts: Part 1",
          'synopsis' => "    Chandler and Joey meet Ursula, Phoebe's twin sister; Joey begins dating Ursula, but that bothers Phoebe, who doesn't get along with her sister very well. Ross attends Lamaze class with Carol and Susan; Carol isn't sure she can go through with the delivery; Ross realizes he's really going to be a father. Chandler can't bear to fire an employee he's attracted to, so he starts to date her and tells everyone else she's mentally unbalanced, so it isn't safe to fire her; she begins to notice people treating her oddly, so Chandler has to come clean. Ross has trouble controlling his monkey, Marcel, who switches Monica's TV into Spanish mode; no one can figure out how to switch it back. Mr. Heckles could have cats. Jamie and Fran (from Mad About You) make an appearance in Central Perk. Rachel finally gets around to taking down the Christmas lights, but falls off the balcony in the process, and ends up hanging upside down outside Mr. Heckles' window. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 17,
          "title"=> "The One with Two Parts: Part 2",
          'synopsis' => "    Monica takes Rachel to the hospital; Rachel has no insurance, so she and Monica switch identities--a tricky situation that is made worse when two cute doctors (guest stars George Clooney and Noah Wyle) ask them on dates; Monica and Rachel start arguing and end up listing all their worst qualities in front of their dates. Ross worries about whether he can be a good father; he seeks comfort from his friends and advice from his father. Joey continues to date Ursula, which interferes with his friendship with Phoebe--he misses her birthday; however, when Ursula stands Joey up and won't return his calls, Phoebe talks to her and finds out she isn't even planning to tell Joey it's over; Phoebe pretends to be Ursula so she can let him down nicely--a ruse which doesn't last. Marcel chokes on scrabble tiles and has to be rushed to the hospital; Ross realizes he can cope with the responsibilities of parenthood. Ugly Naked Guy has a hula-hoop. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 18,
          "title"=> "The One with All the Poker",
          'synopsis' => "    Rachel, tired of being a waitress, sends out resumes; she gets an interview with Saks Fifth Avenue. Ross pines for Rachel. The girls decide they want in on the guys' poker games; reluctantly, the guys accept. The girls don't do so well, but they want a rematch. Monica's competative side comes out... she may have thrown a plate once during a Pictionary game, but she insists it was an accident. Monica inlists the help of her Aunt Iris to give them some poker tips; the girls still don't do so well. Then at the third game, the girls are going down again. Rachel gets some bad news about the job for which she's been interviewing, and gets aggressive at cards; she taunts Ross into a high stakes hand... and he lets her win because he wants to see her happy. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 19,
          "title"=> "The One Where the Monkey Gets Away",
          'synopsis' => "    Rachel finds out Barry is engaged to Mindy, her former bridesmaid; she begins to show interest in dating again, so Ross decides to ask her out. However, before he gets the chance, she loses Marcel while monkey-sitting, which temporarily drives a wedge between them. Mr. Heckles is missing a waffle and saw Regis Philbin once. Rachel, not knowing Marcel is a illegal exotic animal, calls Animal Control; the animal-catcher turns out to be Luisa, who went to high-school with Monica and Rachel. Luisa's memories of high school aren't favorable toward Rachel, so she decides not to cut them any breaks. While looking for Marcel, Joey and Chandler meet some hot girls (Samantha and Tia) with a broken radiator. Luisa tries to shoot Marcel with a tranquilizer but hits Phoebe instead. A delivery of bananas leads everyone to Mr. Heckles apartment; he claims the monkey as his own until Luisa shows up. Rachel pleads with Luisa to let Ross keep Marcel, but it's only the threat of reporting her for shooting Phoebe that convinces her. Ross and Rachel finally sit down for some wine, but before Ross can ask Rachel out, Barry barges in, saying he's still in love with her. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 20,
          "title"=> "The One with the Evil Orthodontist",
          'synopsis' => "    The gang argues the virtues of Mr. Peanut and Mr. Salty. Someone is peeping into the apartment building with a telescope; Joey discovers it's a woman, and that she's very complimentary. Ugly Naked Guy gets gravity boots. Chandler has a good first date with Daniel and then obsesses about trying to call her again without seeming too needy. Rachel ends up sleeping with Barry instead of telling him to get lost; but after she and Mindy (Barry's fiance') get together and talk, Rachel decides Barry is evil. Joey has a one-track mind after Rachel mentions that her best friend, Mindy, taught her to kiss. Ross does a crossword puzzle. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 21,
          "title"=> "The One with the Fake Monica",
          'synopsis' => "    Monica's credit card is stolen; after seeing the credit card statement, she decides the thief lives her life better than she does. She meets 'Fake Monica' at a dance class which was charged to her card, and suprisingly they become friends. As Mononna, she and Fake Monica have a great time... until Fake Monica is arrested. Ross' monkey, Marcel, reaches sexual maturity and starts humping everything in sight; Ross has to find a zoo in which to put his pet. Joey tries to choose a stage name. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 22,
          "title"=> "The One with the Ick Factor",
          'synopsis' => "    Rachel has sex dreams--first about Chandler, then Chandler and Joey, and finally about Ross. Phoebe looks for supplemental income, and works part time as Chandler's secretary. This leads to Chandler's discover that the people at the office don't like him anymore... and they even mimic his unique way of talking. Monica dates Ethan, a younger man who turns out to be even younger than she thought; she breaks up with him because it's just too icky. Ross gets a beeper so Carol can page him when she goes into labor; after several false alarms, he gets beeped for the real thing, and everyone heads to the hospital. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 23,
          "title"=> "The One with the Birth",
          'synopsis' => "    Everyone arrives at the hospital for Carol's delivery. Ross and Susan fight; Rachel flirts with the doctor... for a while; Phoebe sings and makes a lot of sense; Joey helps a single mother (Lydia) give birth; Monica yearns for a baby of her own; Chandler tries to comfort her, but isn't totally successful. The baby is named Ben, after Phoebe. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 1,
          "number"=> 24,
          "title"=> "The One Where Rachel Finds Out",
          'synopsis' => "    Joey participates in a fertility study, but things get hard when he has to avoid intimacy with Melanie, his new fruit-basket-making girlfriend. The gang has a barbecue, but Ross only shows up long enough to drop off Rachel's birthday present and announce he's going to China to get a bone for the museum. Later, while Rachel opens her presents, Chandler lets slip that Ross is in love with her; she goes to the airport to catch him before he leaves, but just misses him. While he's gone, she debates what to do do. Finally, she decides to go for it and goes to the airport for his return. Unknown to her, however, Ross has become involved with another woman during his week in China."
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 1,
          "title"=> "The One with Ross's New Girlfriend",
          'synopsis' => "    Rachel, ready to reveal her feelings to Ross, meets him at the airport; her plans fall apart, however, when she finds out about his new girlfriend, Julie. Chandler, already feeling guilty about revealing Ross's feelings to Rachel, now feels worse that he encouraged Ross to forget about her. The gang watches Sumo Wrestling. Phoebe gives Joey and Chandler haircuts; Monica wants one, too. Phoebe is reluctant because of Monica's picky nature, but finally gives in. Monica wants a cut like Demi Moore; unfortunately Phoebe confuses 'Demi' with 'Dudley'. Chandler needs a suit made, and Joey refers him to the family tailor; while getting measured for pants, Chandler gets a little more attention than he bargained for. Ross sickens everyone (especially Rachel) with his constant gushing for Julie. In Rachel's depression, she sleeps with Paolo again. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 2,
          "title"=> "The One with the Breast Milk",
          'synopsis' => "    Carol breastfeeds Ben, causing Joey and Chandler discomfort. However, even stronger reactions occur when Ross is taking care of Ben and Phoebe checks the temperature of the bottled breast milk by tasting it. Julie invites Monica to go shopping; Rachel finds out and feels betrayed. Joey's status as the Bijan Cologne Man is threatened when his department store hires someone to be the Hombre Man. Rachel tries to be nicer to Julie, but is less than sincere. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 3,
          "title"=> "The One Where Heckles Dies",
          'synopsis' => "    Chandler breaks up with a woman because her nostrils are too big--yet another superficial reason to avoid a real relationship. Mr. Heckles complains again about the noise--it's disturbing his birds (he could have birds). Phoebe, Rachel, and Joey impersonate Janice. Mr. Heckles dies, apparently while hitting his ceiling with a broom because of the noise from above. Phoebe doesn't believe in evolution, which bothers Ross enough that he feels he has to convince her of the theory. Rachel and Monica inherit all of Mr. Heckles earthly possesions; while clearing out his apartment, they discover that Heckles was quite a funny guy in his time. Chandler is upset to find how much he has in common with Mr. Heckles, and in his determination not to die alone, he calls Janice... only to find out that she's married and pregnant. While trying to decide which of Heckles' things to keep, Rachel realizes that Monica doesn't consider the apartment to be 'their' apartment. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 4,
          "title"=> "The One with Phoebe's Husband",
          'synopsis' => "    Phoebe turns out to be married to Duncan, a gay friend who needed a green card. Phoebe did love him, and finds those feelings returning. Now (six years later) he's back and needs a divorce. Turns out he's not gay, and is getting married to someone else. The revelation of Phoebe's secret marriage prompts several other discoveries: The underwear on the telephone pole outside is Monica's, from when she had sex with Fun Bobby on the terrace; Chandler has a third nipple; Joey was in a porn movie (which they then watch). Ross is nervous about the prospect of having sex for the first time with Julie. He approaches Rachel for advice; her own interest in Ross keeps her from being completely honest, and she tries her best to see that it doesn't happen. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 5,
          "title"=> "The One with Five Steaks and an Eggplant",
          'synopsis' => "    Chandler gets calls from an intriguing woman (Jade) looking for someone named Bob. On the phone, he pretends to be Bob and arranges to meet her, so he can console her when 'Bob' stands her up. Their relationship seems to be going very well, until she calls 'Bob' back and complains of Chandler's sexual inadequacies. Chandler plans a big birthday hoopla for Ross, but the expense involved touches a nerve with Phoebe, Joey, and Rachel, who don't make as much money as the others. Monica, Chandler, and Ross celebrate his birthday by attending Hootie and the Blowfish in concert; they end up partying backstage afterwards with the band. Monica gets a new position as Head Lunch Chef, also in charge of purchasing, who has her own little desk (when Roland's not there), and a beeper. However, she is soon fired for accepting a gift from the restaurant's new meat supplier. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 6,
          "title"=> "The One with the Baby on the Bus",
          'synopsis' => "    Ben always cries when he's near Monica. Ross has an allergic reaction to Monica's Kiwi Lime Pie; his tongue swells up and he has to go to the hospital. Chandler and Joey take care of Ben for the day, but accidentally leave him on a city bus while meeting women. They retrieve him from Human Services, but are a little unsure whether they've got the right baby. Phoebe is displaced when Terry, the manager of Central Perk, hires Stephanie, a professional singer, to play at the coffee house. Rachel arranges for Phoebe to play after Stephanie, but Phoebe feels slighted because, unlike Stephanie, she won't be getting paid. She becomes a street musician, outside Central Perk. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 7,
          "title"=> "The One Where Ross Finds Out",
          'synopsis' => "    Chandler realizes he's put on some weight, so he agrees to let Monica be his personal fitness trainer. The results are great, but Monica is a bit too intense for Chandler's liking. Phoebe's dating a guy she really likes, but is perplexed that they haven't had sex yet. Ross and Julie plan to get a cat together. Rachel has her first real date since finding out about Ross' feelings for her. She spends the whole date obsessing about Ross and Julie, and drinking too much wine. While drunk, she leaves Ross a message saying she's over him. The next morning, Ross retrieves his messages while at Rachel's apartment. Confronted with the truth at such an inconvenient time, Ross can't deal with it and leaves. Later, they argue, and Ross says it's too late, because he's with Julie now; he leaves again. However, he comes right back and kisses her. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 8,
          "title"=> "The One with the List",
          'synopsis' => "    Chandler gets a new computer. Ross is depressed about having to chose between Julie and Rachel. Chandler suggests they make a list of pros and cons, which somehow never makes it past the cons. Ross choses Rachel, but then she finds the list and decides she doesn't want to be with Ross anymore. Monica's finds a new job creating Thanksgiving recipes for Mockolate, a synthetic chocolate substitute. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 9,
          "title"=> "The One with Phoebe's Dad",
          'synopsis' => "    Ugly Naked Guy decorates his tree. Monica and Rachel, low on funds, make cookies to give instead of cash as holiday tips to the paperboy, the mailman, the superintendent, etc. Then they receive mangled papers and smashed packages; when their heater won't turn off and the super doesn't fix it, they fear he's also upset about not getting cash. Despite the heat, Rachel and Monica have a big Christmas party. Ross tries to make amends with Rachel. He tells her to make a list about him, so she does; he obsesses about her complaints. Phoebe discovers that everything she thought she knew about her biological father (including his picture) is a lie. Her grandmother knows where he lives, and it's not far. Phoebe (accompanied by Chandler and Joey) goes to visit him, but eventually decides she's not ready. Chandler and Joey have to do their Christmas shopping late on Christmas eve. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 10,
          "title"=> "The One with Russ",
          'synopsis' => "    Joey gets bad reviews for his latest play and decides to quit show business... until his agent gets him an audition for a soap opera. He finds out, however, that he'd have to sleep with the casting director to get the part. Monica starts dating Fun Bobby again; she notices he seems to have a drinking problem. She confronts him and he decides to quit, after which Monica notices he's no longer any fun. Rachel dates Russ, who bears a striking resemblence to Ross. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 11,
          "title"=> "The One with the Lesbian Wedding",
          'synopsis' => "    Carol and Susan are getting married; Ross doesn't want to attend, but when Carol's parent's don't approve of the wedding, Ross convinces her that she should do it anyway, and he gives away the bride. Or rather, one of the brides. Monica caters the wedding, but falls behind and recruits everyone to help. Joey's begins appearing in Days of Our Lives as Dr. Drake Ramoray. One of Phoebe's customer's dies on the massage table, and her spirit enter's Phoebe's body so she can attend to unfinished business. Rachel's mother comes to visit, then announces she's thinking about leaving Rachel's father. Ugly Naked Guy plays the Cello. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 12,
          "title"=> "The One After the Superbowl (part 1)",
          'synopsis' => "    A TV commercial featuring a Monkey reminds Ross of Marcel. Ross decides to visit Marcel at the San Diego Zoo, since he's going to a convention in Los Angeles. Once there, he is told by a zoo representative that Marcel has died; however, an eccentric zoo keeper tells him Marcel was stolen and put into show business. Ross' search leads him back to New York, where Marcel is filming Outbreak II: The Virus Takes Manhattan. Joey begins dating Erika, a stalker who thinks he's really his soap opera character, Dr. Drake Ramoray. Phoebe dates Rob, a guy who hires her to sing songs for children at the library. Her songs are a little too real for the kids' parents. She gets fired, but all the kids come to the coffee house so they can still hear her. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 13,
          "title"=> "The One After the Superbowl (part 2)",
          'synopsis' => "    The gang spends time on Marcel's movie set. Ross has a hard time getting time or attention from Marcel. Chandler bumps into Susie Moss, a girl he knew in the fourth grade, whom he embarrased by lifting her skirt during the class play. She comes on really strong but it turns out to be an elaborate scheme to get back at him. Monica and Rachel see Jean-Claude Van Damme; when Rachel tries to get him interested in Monica, he asks Rachel out instead, causing a rift between the roommates. Joey gets a small part in the movie but doesn't perform too well. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 14,
          "title"=> "The One with the Prom Video",
          'synopsis' => "    Joey, now earning money, gives Chandler an expensive (and gaudy) gold bracelet. Joey is hurt when he finds out Chandler doesn't like it. Monica has a job interview with a restaurant manager who has a salad fetish. Rachel's starting to date again, which prompts Ross to interfere... until she makes it clear that they are never going to get together. Phoebe shares her lobster theory. Jack and Judy Geller come by to drop off some of Monica's things; they're turning her room into a gym. Monica tells them about losing her job, but she just can't get the courage to ask them for money. Amongst Monica's items from home is a video of herself and Rachel preparing for their Senior Prom. Rachel's pre-surgery nose, Monica's large stature, and Ross' Mr. Kotter look are featured. In the video, Rachel's date doesn't show up and she's distraught about having to miss her own Prom. Ross prepares to take her, but just before this is revealed, Rachel's date shows up. Rachel, watching the video for the first time, is so moved by Ross' compassion for her that she forgives him for the list and kisses him passionately. Monica discovers some unexpected footage of her parents at the end of the video tape. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 15,
          "title"=> "The One Where Ross and Rachel...You Know",
          'synopsis' => "    Joey buys a big screen TV and two leather reclining chairs; he and Chandler don't move from them for days. Phoebe helps Monica cater a party at the home of Dr. Richard Burke, an old friend of the Gellers, who recently divorced. Despite their age difference, Richard and Monica begin dating. Ross and Rachel begin dating. One of their dates is interrupted when Ross is paged to the museum. By the time he's done with work, their plans are ruined, so they spend the night together in the museum. Joey and Chandler watch Beavis and Butthead. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 16,
          "title"=> "The One Where Joey Moves Out",
          'synopsis' => "    Chandler and Joey attend a party thrown by one of the other actors on Days of Our Lives. He happens to be moving out, so he offers to let Joey have his apartment. Having never lived alone, Joey decides to take him up on it, which disheartens Chandler. Phoebe and Rachel decide to get tattoos; their decision is complicated by the facts that Ross doesn't like tattoos and Phoebe doesn't like needles. Ross, Monica, and Richard go to Jack Geller's birthday party. Everyone is buzzing with rumors of Richard's young new girlfriend (also known as his twinkie in the city). Monica hides in the bathtub; her parents come into the bathroom and fool around. Later, Monica reveals her relationship with Richard to her parents. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 17,
          "title"=> "The One Where Eddie Moves In",
          'synopsis' => "    Joey shows his friends his new apartment, which (unfortunately) he decorated himself. A record producers signs Phoebe to make a video of Smelly Cat, but dubs in someone else's voice. Monica is annoyed that Ross is around so much; they fight like typical siblings. Chandler and Joey miss each other, but neither one will admit it. Chandler gets a new roommate, Eddie, who seems like a great guy. Joey is jealous, and he and Chandler fight like a typical couple. Chandler finds out that he does really have that much in common with Eddie after all. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 18,
          "title"=> "Th One Where Dr. Ramoray Dies",
          'synopsis' => "    Chandler's roommate, Eddie, begins to show signs of instability: He's obsessed with his ex-girlfriend; he accuses Chandler of sleeping with her, and of killing his fish. Richard wonders how many men Monica's been with, after Phoebe announces that it's been a lot. This leads Ross and Rachel to a similar discussion. Monica has Richard sleep over on the same night that Rachel has Ross sleep over. Unfortunately, there's only one condom in the apartment. Joey's claim in Soap Opera Digest that he writes a lot of his own lines angers the show's writer, who decides to have Dr. Ramoray fall down an elevator shaft. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 19,
          "title"=> "The One Where Eddie Won't Go",
          'synopsis' => "    Chandler wakes in the night to find Eddie watching him sleep; they argue and Eddie agrees to leave. The next day, Eddie goes on a fruit drying kick and has no recollection of their previous conversation. Variations of this happen day after day. Joey's pride won't let him try out for small roles, but his mounting debts (and Ross) slowly convince him otherwise. Joey makes good use of his Word of the Day toilet paper. Monica, Rachel, and Phoebe read a female empowerment book, Be Your Own Windkeeper, which has even more detrimental effects on their relationships with each other than it does on their relationships with men. Joey moves back in with Chandler, which allows Chandler to take advantage of Eddie's faulty memory, and finally be rid of him. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 20,
          "title"=> "The One Where Old Yeller Dies",
          'synopsis' => "    Phoebe discovers that her mother used to shield her from the sad parts of movies, like Old Yeller. She rents all the movies her mother used to show her, and gets rather depressed and pessimistic. Ross, bothered that he's missing significant steps in Ben's development, takes Ben for a weekend. Ben says his first words. At Monica's request, Chandler and Joey start spending time hanging out with Richard. Then they try to be more like Richard: Joey smokes cigars and Chandler grows a mustache. Richard starts to talk and dress like Chandler. They end up spending too much time together, until Richard discovers they view him as a father figure, rather than one of the guys. Rachel finds out that Ross has his future with her all planned out, and she panics. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 21,
          "title"=> "The One with the Bullies",
          'synopsis' => "    Monica notices a stock with her initials (MEG), and decides to try to make a living on the stock market rather than take a demeaning job at a 50's theme diner. She doesn't do so well. Phoebe decides it's time to meet her father, but accidentally runs over his dog. After getting it back from the vet, she delivers it home, only to find that Frank Buffay hasn't been there for four years. However, she discovers she has a half-brother, Frank Junior. Ross and Chandler get intimidated out of their seats, a hat, and the coffee shop, by a couple of bullies. As they're about to have a final showdown, someone steals from all of them, so Ross, Chandler, and the bullies band together to kick butt. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 22,
          "title"=> "The One with the Two Parties",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 23,
          "title"=> "The One with the Chicken Pox",
          'synopsis' => "    Rachel's surprise birthday party is split in two to keep her divorcing parents from running into each other. Monica makes flan instead of cake. Phoebe smuggles guests out of Monica's boring party and into Chandler and Joey's raging celebration. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 2,
          "number"=> 24,
          "title"=> "The One with Barry and Mindy's Wedding",
          'synopsis' => "    Phoebe's Navy man (Ryan) is in town for two weeks, but their plans are foiled because Phoebe has the chicken pox, and gives them to him as well. Monica tapes oven mits to their hands so they won't scratch. Monica is releaved that Richard thinks her neurotic behavior is endearing; but she's upset that he doesn't seem to have any compulsive obsessions himself. Chandler gets Joey a job at his office, and tells him to act like a processor. Joey takes it too far, and invents a character, Joseph, who has a wife and kids, and who causes quite a bit of trouble for Chandler. Rachel is turned on by uniforms; Ross gets one. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 1,
          "title"=> "The One with the Princess Leia Fantasy",
          'synopsis' => "    Joey has an audition for a movie directed by Warren Beatty; the part involves kissing another man, and Joey tries to find one to practice with. Rachel prepares to be the maid of honor at Mindy's wedding to Barry. The bridesmaid's dresses are hideous. Going to the wedding is even more painful than Rachel expected. Her dress gets caught in her underwear, she finds out that Barry's parents told everyone she was insane from syphilis, and Barry and his best man make jokes about her. But she finds the strength to stay. Chandler meets a woman on the Internet; he really likes her. He finds out she's married, but decides to meet her anyway. She turns out to be Janice. Monica asks Richard about his plans for the future, and discovers he doesn't want to start having kids again. While at Barry and Mindy's wedding, they decide their relationship is over."
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 2,
          "title"=> "The One Where No One's Ready",
          'synopsis' => "    Monica is dysfunctional because of her breakup with Richard. Joey can't stand having Janice around all the time; she invites him on a day of fun so they can get to know each other. Ross and Rachel talk about their fantasies; Rachel then tells Phoebe and Monica about Ross's Princess Leia fantasy. Phoebe and Mr. Gellar comfort Monica. Ross and Chandler share personal information, which leads to some unpleasant side effects for Ross. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 3,
          "title"=> "The One with the Jam",
          'synopsis' => "    Ross has an important night but no one else is ready to go. Joey and Chandler fight about chairs and clothes. Joey spills humus on Phoebe's dress. Monica hears an old message from Richard and thinks that it might be new; she leaves him a message which she then tries to erase, but just makes it worse. Rachel can't decide what to wear; Ross gets angry and Rachel decides not to go... unless he drinks the fat. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 4,
          "title"=> "The One with the Metaphorical Tunnel",
          'synopsis' => "    Joey falls while jumping on the bed and dislocates his arm. Monica tries to stay busy to keep her mind off Richard. First, she makes a lot of jam, which Joey loves. Second, she begins screen sperm donors--and runs into Joey's file. Phoebe is followed by her sister's stalker (Malcolm)... then starts dating him. Chandler seeks advice on relationships from Rachel and Ross. Ross secretly tells him about the hug and roll --a maneuver designed to end the cuddling and give you some space. Chandler tries it out but ends up dumping Janice on the floor. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 5,
          "title"=> "The One with Frank Jr.",
          'synopsis' => "    Joey appears in an infomercial for the Milk Master 2000. Phoebe forgets to tell Joey about an audition... but makes it up to him by calling the casting director and pretending to be an agent; Joey asks her to represent him full time. Ross has a hard time accepting that his son plays with a Barbie doll; he tries to get him interested in more masculine toys. Chandler is scared of the tunnel of commitment until Joey convinces him to face his fears... but then Chandler overdoes it and scares Janice away for a while. Monica and Rachel welcome Chandler to their side of the tunnel and console him with ice-cream. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 6,
          "title"=> "The One with the Flashback",
          'synopsis' => "    Joey gets carried away with a mailbox project and ends up building an entertainment center; he mistakenly cuts Chandler's door in half in the process. Then he gets sidetracked on re-tiling Monica's bathroom floor. Phoebe hangs out with her half-brother, Frank Jr., in hopes of getting to know him better; he misunderstands when she tells him she gives people massages and stuff. The gang all consider what five celebrities would be on their freebie list--people they can sleep with without anyone getting upset; Ross finally narrows his list down by eliminating Isabella Rossellini... then he bumps into her. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 7,
          "title"=> "The One with the Race Car Bed",
          'synopsis' => "    Prompted by a question from Janice, the group has a flashback revealing events which occurred three years earlier: Chandler searches for a roommate; Cute Naked Guy puts on weight; Phoebe secretly moves out of Monica's apartment; The bar is closing to make way for a coffee shop; Mr. Heckles could play the oboe; Rachel contemplates her upcoming marriage to Barry; Mr. Heckles could be Chandler's new roommate; Ross is happy that Carol has found a new friend -- Susan; One of the lifeguards dismantles a nuclear device; Almost relationships are revealed between Joey and Monica, Monica and Chandler, Chandler and Rachel, Ross and Phoebe. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 8,
          "title"=> "The One with the Giant Poking Device",
          'synopsis' => "    Monica and Phoebe shop at the store owned by Janice's soon-to-be-ex-husband, and Monica ends up with the wrong bed. Rachel and Ross have dinner with her father, which doesn't go well; the next day at brunch, Ross and Dr. Green find something to bond over. Gunther broods over Rachel. Joey Teaches a class--Acting for Soap Operas. While trying to return the bed, Joey and Monica see Janice kissing her husband. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 9,
          "title"=> "The One with the Football",
          'synopsis' => "    Phoebe avoids going to the dentist because whenever she goes, someone dies. Joey tells Chandler about Janice kissing her husband, and Chandler confronts her. She must chose between the two men she loves; it looks like she might choose Chandler, but he decides he can't be responsible for breaking up her marriage. Ross has an emergency at the museum, so Rachel takes care of Ben; Monica bangs Ben's head. Ugly Naked Guy has a new hammock, and looks awfully still; the gang fashions a very long poking device out of chopsticks so they can make sure he's not dead. Gunther continues to brood over Rachel. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 10,
          "title"=> "The One Where Rachel Quits",
          'synopsis' => "    The girls cook Thanksgiving dinner while the guys watch a football game on TV; all six decide to play football together. Monica and Ross compete for the Geller Cup. Joey and Chandler compete for a Dutch girl. Rachel goes long. Phoebe flashes the other team. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 11,
          "title"=> "The One Where Chandler Can't Remember Whic",
          'synopsis' => "    Gunther re-trains Rachel on how to be a waitress; she realizes it's time to quit working at the coffee shop. Ross accidentally breaks a little girl's leg, and ends up selling Brown Bird Cookies for her so she can go to Space Camp. Monica's childhood cookie habit returns. Joey gets a job at a Christmas tree lot. Phoebe tries to come to terms with the cruelty of having a Christmas tree. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 12,
          "title"=> "The One with All the Jealousy",
          'synopsis' => "    Joey astounds the gang with a card trick. Chandler, depressed over his break-up with Janice, fools around with one of Joey's sisters at Joey's birthday party; but afterward can't remember which sister; he visits the Tribianni family, hoping to figure it out, but only gets himself into trouble--by kissing the wrong one. Rachel meets Mark, who gets her an interview at Bloomingdale's; Ross worries about Mark's motives. Phoebe dates the noisy guy from upstairs, who seems to charm himself out of any situation. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 13,
          "title"=> "The One Where Monica and Richard Are Just Friends",
          'synopsis' => "    Rachel has her first day on the job; Ross sends her a singing telegram, and continues to be jealous about Mark. Chandler arranges a bachelor party for his cousin. Joey gets an audition for a Broadway musical, but he can't dance. Gunther pines for Rachel. Monica falls for Julio, a co-worker at the diner who writes a poetry; he writes a poem for Monica which isn't very flattering. Ross and Ben have a play date with the stripper from the bachelor party, which makes Rachel jealous. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 14,
          "title"=> "The One with Phoebe's Ex-Partner",
          'synopsis' => "    Monica and Richard have a chance meeting in a video store and decide to see each other as friends--but it doesn't stop there. Phoebe dates Robert, a jock whose shorts are a little too revealing; Ross and Chandler don't know how to tell him. Joey and Rachel read each other's favorite books: The Shining and Little Women. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 15,
          "title"=> "The One Where Ross and Rachel Take a Break",
          'synopsis' => "    Phoebe's former singing partner (Leslie) performs at Central Perk and asks Phoebe if they can get back together. They eventually do, but soon have problems when Leslie sells Smelly Cat to a kitty litter company. Chandler meets a woman (Ginger) in the men's room and asks her out; coincidentally, Joey used to date her-- until an unfortunate incident occurred, involving her artificial leg. Chandler gets over the fact that she has an artificial leg, but when Ginger learns he has a third nipple, she dumps him. Ross continues to struggle with Rachel's career and her involvement with Mark. Chandler has his third nipple removed. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 16,
          "title"=> "The One with the Morning After",
          'synopsis' => "    Phoebe dates a diplomat who doesn't speak english; she convinces Monica to double with them so the translator will have a date. Chandler and Joey gawk at the Xerox girl, who invites them both to a dance club. Ross interrupts Rachel's late night emergency at the office, leading to a fight; Rachel wants to take a break. Ross goes to the club and ends up kissing the Xerox girl. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 17,
          "title"=> "The One Without the Ski Trip",
          'synopsis' => "    Rachel is sorry about her fight with Ross; meanwhile, Ross wakes up with the Xerox girl; Chandler and Joey convince Ross not to tell Rachel; Ross tries to make sure Rachel doesn't find out. Monica and Phoebe try out a painless leg waxing kit. Chandler, Joey, Phoebe, and Monica get stuck in Monica's room while Ross and Rachel try to work things out. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 18,
          "title"=> "The One with the Hypnosis Tape",
          'synopsis' => "    Ross and Rachel's fighting causes the gang to try to hang out with them separately. Chandler, under stress because Ross and Rachel's break-up reminds him of his parents divorce, starts smoking again. Rachel invites everyone but Ross to go skiing for the weekend; they get locked out of the car at a rest stop; Rachel refuses to call Ross for help, so Monica and Phoebe do it behind her back; he comes to their aid and then gets stuck because his battery dies. Ross interferes with Carol's and Susan's Anniversary. "

        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 19,
          "title"=> "The One with the Tiny T-Shirt",
          'synopsis' => "    Rachel gives Chandler a hypnosis tape to help him quit smoking; however, the tape was designed for women--and it works all too well. Phoebe's brother, Frank, announces that he's getting married--to his home economics teacher, who is much older; Phoebe tries to break it up and enlists help from Ross and Joey. Monica gets asked out by a customer at the diner, who turns out to be a millionaire; they go out for pizza... in Italy. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 20,
          "title"=> "The One with the Dollhouse",
          'synopsis' => "    Monica continues to date Pete but is still not attracted to him; he thinks she might change her mind. Joey gets a lead part in a play, but can't stand the female lead... until he realizes he likes her. Mark asks Rachel out. Rachel asks Ross to come over, but just so she can return some of his stuff; Ross gets upset and demands all his stuff back, including a tiny t-shirt that Rachel likes to sleep in. Later, Ross finds out Rachel is going on a date with Mark and spies on them through Chandler's peep-hole. Phoebe ponders Spiderman. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 21,
          "title"=> "The One with a Chick and a Duck",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 22,
          "title"=> "The One with the Screamer",
          'synopsis' => "    Ross and Monica's Aunt Silvia passes away and leaves a beautiful dollhouse to Monica; Monica invites Phoebe to play with it but then doesn't like Phoebe's ideas; Phoebe makes her own dollhouse, but it catches fire. Joey yearns for Kate, but since he can't have her, he goes out with her understudy; things get hot between Joey and Kate during rehearsal, however, and they end up sleeping together... but it means more to Joey than it does to Kate. Rachel sets Chandler up on a date with her boss; she likes him, but he thinks she's a big dull dud; Chandler tells her he'll call even though he doesn't intend to. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 23,
          "title"=> "The One with Ross's Thing",
          'synopsis' => "    The diner where Monica works puts their staff on roller-skates; Monica crashes into Rachel while skating; Rachel's injuries are worse than first believed. Pete buys a restaurant and offers Monica a job as head chef; she's unsure whether to take it, since she still isn't attracted to Pete. Pete makes up a story about another woman so Monica will think he's over her; Phoebe sees right through it but promises not to tell Monica. Joey buys a pet chick for Chandler, but caring for it becomes a source of conflict. Ross has a chance to be on TV as part of a panel of Paleontologists, but gives it up to take Rachel to the hospital. Monica and Pete are about to stop seeing each other, but then they kiss... and Monica finally feels it. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 24,
          "title"=> "The One with the Ultimate Fighting Champion",
          'synopsis' => "    Phoebe waits on hold so she can have her phone repaired before the warranty expires. The gang goes to Joey's play on opening night. Rachel dates Tommy, who seems pretty nice... except when he starts screaming at people; however, only Ross witnesses this behavior and can't convince anyone else. Joey's play gets bad reviews, prompting the director to break up with Kate; Joey and Kate spend the night talking and falling in love. Kate gets a job offer in L.A. and decides to leave. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 3,
          "number"=> 25,
          "title"=> "The One at the Beach",
          'synopsis' => "    Ross finds a growth on his body but can't tell what it is; neither can anyone else. He visits his doctor, Chandler's doctor, and Phoebe's guru. Phoebe dates two guys: Vince, a burly fireman, and Jason, a sensitive teacher. She tries but can't decide which one to break up with. Pete is out of town and tells Monica, We need to talk, which gets her worried. The gang goes with Monica to Pete's place see how a millionaire lives; Joey finds a stub for a $50,000 check to a ring designer; Rachel begins to plan Monica's wedding. "
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 1,
          "title"=> "The One with the Jellyfish",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 2,
          "title"=> "The One with the Cat",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 3,
          "title"=> "The One with the Cuffs",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 4,
          "title"=> "The One with the Ballroom Dancing",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 5,
          "title"=> "The One with Joey's New Girlfriend",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 6,
          "title"=> "The One with the Dirty Girl",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 7,
          "title"=> "The One Where Chandler Crosses the Line",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 8,
          "title"=> "The One with Chandler in a Box",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 9,
          "title"=> "The One Where They're Going to Party!",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 10,
          "title"=> "The One with the Girl from Poughkeepsie",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 11,
          "title"=> "The One with Phoebe's Uterus",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 12,
          "title"=> "The One with the Embryos",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 13,
          "title"=> "The One with Rachel's Crush",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 14,
          "title"=> "The One with Joey's Dirty Day",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 15,
          "title"=> "The One with All the Rugby",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 16,
          "title"=> "The One with the Fake Party",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 17,
          "title"=> "The One with the Free Porn",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 18,
          "title"=> "The One with Rachel's New Dress",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 19,
          "title"=> "The One with All the Haste",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 20,
          "title"=> "The One with All the Wedding Dresses",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 21,
          "title"=> "The One with the Invitation",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 22,
          "title"=> "The One with the Worst Best Man Ever",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 23,
          "title"=> "The One with Ross' Wedding (part 1)",
        ],
        [
          "serieName" => 'Friends',
          "seasonNumber"=> 4,
          "number"=> 24,
          "title"=> "The One with Ross' Wedding (part 2)",
        ],
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::EPISODES as $key => $episode) {  
            $program = $manager
            ->getRepository(Program::class)
            ->findOneBy(array('title' => $episode['serieName']))
            ;

            $season = $manager
                ->getRepository(Season::class)
                ->findOneBy(array('program_id' => $program->getId(), 'number' => $episode['seasonNumber']))
            ;
            $seasonClass = new Episode();  
            $seasonClass->setNumber($episode['number']);
            $seasonClass->setSeason($season);
            $seasonClass->setSynopsis($episode['synopsis']);
            $seasonClass->setTitle($episode['title']);
    
            $manager->persist($seasonClass);
    
        }  

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
            ProgramFixtures::class,
            SeasonFixtures::class
        ];
    }
}
