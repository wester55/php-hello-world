/* Replace environment variables with the appropriate values for your OpenShift app. 
Run command: mysql -u$OPENSHIFT_MYSQL_DB_USERNAME -p$OPENSHIFT_MYSQL_DB_PASSWORD -h$OPENSHIFT_MYSQL_DB_HOST < init.sql */
USE $OPENSHIFT_APP_NAME;

DROP TABLE IF EXISTS `Place`;

CREATE TABLE `Place` (
  `PlaceID` int(11) NOT NULL AUTO_INCREMENT,
  `PlaceName` varchar(255) NOT NULL,
  PRIMARY KEY (`PlaceID`)
);

INSERT INTO `Place` VALUES (1,'New York'), (2,'London'), (3,'Beijing'), (4,'Moscow'),(5,'Sydney');

