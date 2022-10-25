$(function() {
    $.fn.emojiPicker.emojis = [
      {
        "name": "grinning",
        "unicode": {"apple":"1F600", "google":"1F600", "twitter":"1F600"},
        "shortcode": "grinning",
        "description": "GRINNING FACE",
        "category": "people"
      },
      {
        "name": "grin",
        "unicode": {"apple":"1F601", "google":"1F601", "twitter":"1F601"},
        "shortcode": "grin",
        "description": "GRINNING FACE WITH SMILING EYES",
        "category": "people"
      },
      {
        "name": "grimacing",
        "unicode": {"apple":"1F62C", "google":"1F62C", "twitter":"1F62C"},
        "shortcode": "grimacing",
        "description": "GRIMACING FACE",
        "category": "people"
      },
      {
        "name": "joy",
        "unicode": {"apple":"1F602", "google":"1F602", "twitter":"1F602"},
        "shortcode": "joy",
        "description": "FACE WITH TEARS OF JOY",
        "category": "people"
      },
      {
        "name": "smiley",
        "unicode": {"apple":"1F603", "google":"1F603", "twitter":"1F603"},
        "shortcode": "smiley",
        "description": "SMILING FACE WITH OPEN MOUTH",
        "category": "people"
      },
      {
        "name": "smile",
        "unicode": {"apple":"1F604", "google":"1F604", "twitter":"1F604"},
        "shortcode": "smile",
        "description": "SMILING FACE WITH OPEN MOUTH AND SMILING EYES",
        "category": "people"
      },
      {
        "name": "sweat_smile",
        "unicode": {"apple":"1F605", "google":"1F605", "twitter":"1F605"},
        "shortcode": "sweat_smile",
        "description": "SMILING FACE WITH OPEN MOUTH AND COLD SWEAT",
        "category": "people"
      },
      {
        "name": "laughing",
        "unicode": {"apple":"1F606", "google":"1F606", "twitter":"1F606"},
        "shortcode": "laughing",
        "description": "SMILING FACE WITH OPEN MOUTH AND TIGHTLY-CLOSED EYES",
        "category": "people"
      },
      {
        "name": "innocent",
        "unicode": {"apple":"1F607", "google":"1F607", "twitter":"1F607"},
        "shortcode": "innocent",
        "description": "SMILING FACE WITH HALO",
        "category": "people"
      },
      {
        "name": "wink",
        "unicode": {"apple":"1F609", "google":"1F609", "twitter":"1F609"},
        "shortcode": "wink",
        "description": "WINKING FACE",
        "category": "people"
      },
      {
        "name": "blush",
        "unicode": {"apple":"1F60A", "google":"1F60A", "twitter":"1F60A"},
        "shortcode": "blush",
        "description": "SMILING FACE WITH SMILING EYES",
        "category": "people"
      },
      {
        "name": "slightly_smiling_face",
        "unicode": {"apple":"1F642", "google":"1F642", "twitter":"1F642"},
        "shortcode": "slightly_smiling_face",
        "description": "slightly smiling face",
        "category": "people"
      },
      {
        "name": "upside_down_face",
        "unicode": {"apple":"1F643", "google":"1F643", "twitter":"1F643"},
        "shortcode": "upside_down_face",
        "description": "upside-down face",
        "category": "people"
      },
      {
        "name": "relaxed",
        "unicode": {"apple":"263A", "google":"263A", "twitter":"263A"},
        "shortcode": "relaxed",
        "description": "WHITE SMILING FACE",
        "category": "people"
      },
      {
        "name": "yum",
        "unicode": {"apple":"1F60B", "google":"1F60B", "twitter":"1F60B"},
        "shortcode": "yum",
        "description": "FACE SAVOURING DELICIOUS FOOD",
        "category": "people"
      },
      {
        "name": "relieved",
        "unicode": {"apple":"1F60C", "google":"1F60C", "twitter":"1F60C"},
        "shortcode": "relieved",
        "description": "RELIEVED FACE",
        "category": "people"
      },
      {
        "name": "heart_eyes",
        "unicode": {"apple":"1F60D", "google":"1F60D", "twitter":"1F60D"},
        "shortcode": "heart_eyes",
        "description": "SMILING FACE WITH HEART-SHAPED EYES",
        "category": "people"
      },
      {
        "name": "kissing_heart",
        "unicode": {"apple":"1F618", "google":"1F618", "twitter":"1F618"},
        "shortcode": "kissing_heart",
        "description": "FACE THROWING A KISS",
        "category": "people"
      },
      {
        "name": "kissing",
        "unicode": {"apple":"1F617", "google":"1F617", "twitter":"1F617"},
        "shortcode": "kissing",
        "description": "KISSING FACE",
        "category": "people"
      },
      {
        "name": "kissing_smiling_eyes",
        "unicode": {"apple":"1F619", "google":"1F619", "twitter":"1F619"},
        "shortcode": "kissing_smiling_eyes",
        "description": "KISSING FACE WITH SMILING EYES",
        "category": "people"
      },
      {
        "name": "kissing_closed_eyes",
        "unicode": {"apple":"1F61A", "google":"1F61A", "twitter":"1F61A"},
        "shortcode": "kissing_closed_eyes",
        "description": "KISSING FACE WITH CLOSED EYES",
        "category": "people"
      },
      {
        "name": "stuck_out_tongue_winking_eye",
        "unicode": {"apple":"1F61C", "google":"1F61C", "twitter":"1F61C"},
        "shortcode": "stuck_out_tongue_winking_eye",
        "description": "FACE WITH STUCK-OUT TONGUE AND WINKING EYE",
        "category": "people"
      },
      {
        "name": "stuck_out_tongue_closed_eyes",
        "unicode": {"apple":"1F61D", "google":"1F61D", "twitter":"1F61D"},
        "shortcode": "stuck_out_tongue_closed_eyes",
        "description": "FACE WITH STUCK-OUT TONGUE AND TIGHTLY-CLOSED EYES",
        "category": "people"
      },
      {
        "name": "stuck_out_tongue",
        "unicode": {"apple":"1F61B", "google":"1F61B", "twitter":"1F61B"},
        "shortcode": "stuck_out_tongue",
        "description": "FACE WITH STUCK-OUT TONGUE",
        "category": "people"
      },
      {
        "name": "money_mouth_face",
        "unicode": {"apple":"1F911", "google":"1F911", "twitter":"1F911"},
        "shortcode": "money_mouth_face",
        "description": "Money-Mouth Face",
        "category": "people"
      },
      {
        "name": "nerd_face",
        "unicode": {"apple":"1F913", "google":"1F913", "twitter":"1F913"},
        "shortcode": "nerd_face",
        "description": "Nerd Face",
        "category": "people"
      },
      {
        "name": "sunglasses",
        "unicode": {"apple":"", "google":"", "twitter":"1F60E"},
        "shortcode": "sunglasses",
        "description": "SMILING FACE WITH SUNGLASSES",
        "category": "people"
      },
    

      
    ]
    });
    