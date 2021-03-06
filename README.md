# Yaga

**Y**&#8203;et **A**&#8203;nother **G**&#8203;amification **A**&#8203;pplication is a Garden application that provides a gamification platform for Vanilla Forums and other Garden applications. It integrates by default with Vanilla Forums. Out of the box, it provides Reactions, Badges, and Ranks.

It is released under the GPLv3 and may be released under a different license _**with permission**_.


## Installation

1. To get up and running with Yaga, either:

   * [Download the latest stable release](http://vanillaforums.org/get/yaga-application)
   * Extract into the `/applications` directory
   
   -- OR --
   
   * Clone the repository into the `/applications` directory:
   
   ```sh
   $ cd path-to-applications
   $ git clone git://github.com/hgtonight/Application-Yaga.git yaga
   ```
   
   > Make sure to double check that the installed folder is named `yaga`!
   
   The latter option is only recommend if you're familiar with git.
2. Once you've added the application to your Vanilla installation, you need to activate it in the dashboard. Once activated, you will see a new "Gamification" menu in the dashboard sidebar where you can configure each individual part of the Yaga application.

3. Finally, you need to delete the `/cache/locale_map.ini` file to force refresh the locale definitions.

---
Copyright 2013 - 2014 © Zachary Doll
