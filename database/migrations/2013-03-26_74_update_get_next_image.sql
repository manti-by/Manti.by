DROP PROCEDURE IF EXISTS `GET_NEXT_IMAGE_BY_ID`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `GET_NEXT_IMAGE_BY_ID`(IN `_id` int)
BEGIN
    DECLARE __gallery_id INT;
    DECLARE __count_left INT;

    SELECT `gallery_id`
    INTO __gallery_id
    FROM `gallery_files`
    WHERE `file_id` = _id;

    CREATE TEMPORARY TABLE IF NOT EXISTS `next_image` AS (
        SELECT f.*
        FROM `gallery_files` gf
        JOIN `files` f ON f.`id` = gf.`file_id`
        WHERE gf.`file_id` < _id
          AND gf.`gallery_id` = __gallery_id
        ORDER BY f.`timestamp` DESC, f.`id` DESC
        LIMIT 1
    );

    SELECT COUNT(*)
    INTO __count_left
    FROM `next_image`;

    IF __count_left > 0 THEN
        SELECT * FROM `next_image`;
    ELSE
        SELECT f.*
        FROM `gallery_files` gf
        JOIN `files` f ON f.`id` = gf.`file_id`
        WHERE gf.`gallery_id` = __gallery_id
        ORDER BY f.`timestamp` DESC, f.`id` DESC
        LIMIT 1;
    END IF;
END
;;
DELIMITER ;