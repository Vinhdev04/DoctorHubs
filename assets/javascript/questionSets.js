const questionSets = {
    BDI: [
        {
            question: "Bạn cảm thấy tinh thần như thế nào? Có hay buồn hay không?",
            options: [
                { text: "Tôi cảm thấy tinh thần sảng khoái và vui vẻ", score: 0 },
                { text: "Nhiều lúc tôi cảm thấy chán nản và buồn bã", score: 1 },
                { text: "Lúc nào tôi cũng cảm thấy buồn chán và bất thần tới không thể kiểm soát được", score: 2 },
                { text: "Lúc nào tôi cũng suy nghĩ lo âu, cảm thấy bất hạnh, buồn chán đến mức hoàn toàn đau khổ", score: 3 },
                { text: "Tôi cảm thấy cực kỳ buồn tủi, tinh thần hoang loạn, khổ sở đến mức không thể chịu đựng được", score: 4 }
            ]
        },
        {
            question: "Bạn có cảm thấy bi quan về tương lai không?",
            options: [
                { text: "Tôi không cảm thấy bi quan về tương lai", score: 0 },
                { text: "Tôi cảm thấy bi quan về tương lai hơn trước đây", score: 1 },
                { text: "Tôi không mong đợi điều gì tốt đẹp trong tương lai", score: 2 },
                { text: "Tôi cảm thấy tương lai vô vọng và không thể cải thiện", score: 3 },
                { text: "Tôi cảm thấy không còn gì để hy vọng nữa", score: 4 }
            ]
        }
        // Thêm các câu hỏi khác để đủ 21 câu
    ]
    // Thêm các bộ câu hỏi khác (DASS21, DASS42, v.v.) tương tự
};

const resultCalculators = {
    BDI: function(answers) {
        const totalScore = answers.reduce((sum, score) => sum + (score || 0), 0);
        if (totalScore <= 10) return "Bạn không có dấu hiệu trầm cảm.";
        if (totalScore <= 18) return "Bạn có thể đang bị trầm cảm nhẹ.";
        if (totalScore <= 29) return "Bạn có thể đang bị trầm cảm vừa. Hãy cân nhắc gặp chuyên gia tâm lý.";
        return "Bạn có thể đang bị trầm cảm nặng. Hãy tìm sự giúp đỡ từ chuyên gia ngay lập tức.";
    }
    // Thêm các hàm tính kết quả cho các bài test khác
};

export { questionSets, resultCalculators };
